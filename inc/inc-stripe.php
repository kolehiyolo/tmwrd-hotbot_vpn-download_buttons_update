<?php
    include_once(dirname(__FILE__). '/../config/config.php');
    include_once('inc-currencies.php');
    $currencyCountryList = Currencies::getFullList();
    $trackingSource = hb_get_tracking_params()["source"] ?? null;
    Countries::getDefault();
?>
<!--suppress SpellCheckingInspection -->
<script src="https://cdn.jsdelivr.net/npm/vue@legacy"></script>
<script src="https://unpkg.com/axios@0.27.2/dist/axios.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>

<script src="https://www.google.com/recaptcha/api.js?render=<?=config(RECAPTCHA_SITE_KEY)?>"></script>

<script>
    window.addEventListener( "pageshow", function ( event ) {
        const perfEntries = performance.getEntriesByType("navigation");
        if (perfEntries[0].type === "back_forward") {
            location.reload();
        }
    });

    /* if (hasTune) {
        axios.post(
            '<?= config(HOTBOT_API_URL) ?>v1/auth/trackTuneParams', { trackingJson: tuneParamsJson }
        );
    } */
    const Plans = {
        MONTH: "1 month",
        HALF: "6 months",
        YEAR: "1 year",
        FOUR: "4 years"
    };
    const DEFAULT_PLAN = Plans.YEAR;
    let PPP;
    let lPathN = location.pathname;
    let lPathNArr = lPathN.split('/');
    let isOrderPage = lPathNArr.includes('order') || lPathNArr.includes('order-accordion');
    let isOrderFree = lPathNArr.includes('order-free');
    let isAccordion = lPathNArr.includes('order-accordion');

    // Set up Stripe.js and Elements to use in checkout form
    var stripe = Stripe('<?= config(STRIPE_API_KEY); ?>');
    var elements = stripe.elements();
    var elementsSepa = stripe.elements();
    var style = {
        base: {
            color: "#32325d",
            fontFamily: 'noto_sansregular,Arial,Helvetica,sans-serif',
            fontSmoothing: "antialiased",
            fontSize: "1.25rem",
            "::placeholder": {
                color: "#aab7c4"
            },
            border: "1px solid #a9a9b2",
            borderRadius: "3px",
        },
        invalid: {
            color: "#fa755a",
            iconColor: "#fa755a"
        }
    };

    var style2 = {
        base: {
            color: '#32325d',
            fontSize: '16px',
            border: "1px solid #a9a9b2",
            borderRadius: "3px",
            '::placeholder': {
                color: '#aab7c4'
            },
            ':-webkit-autofill': {
                color: '#32325d',
            },
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a',
            ':-webkit-autofill': {
                color: '#fa755a',
            },
        },
    };

    let getPlans = '<?=config(HOTBOT_API_URL)?>v1/superadmin/get-stripe-plans';
    let getAllPlans = '<?=config(HOTBOT_API_URL)?>v1/superadmin/getPlans';
    let allPlansT = axios.get(getAllPlans);
    let thisDayDate = new Date();
    let atDayDate = thisDayDate.toLocaleString('en',{month:'long'});
    atDayDate += ' ' + thisDayDate.getDate() + ', ' + thisDayDate.getFullYear();
    let dayAfterSevenDay = new Date(thisDayDate.getTime()+6*24*3600*1000);
    let toDayDate = dayAfterSevenDay.toLocaleString('en',{month:'long'}) + ' '+dayAfterSevenDay.getDate()+ ', ' + dayAfterSevenDay.getFullYear();
    let firstTime = true;

    var app = new Vue({
        el: '#app',
        data: {
            showZeroTrial: false,
            showPayPal: <?=config(SHOW_PAYPAL)?>,
            PaySystem: {
                COINPAYMENTS: 'coinpayments',
                PAYPAL: 'paypal',
                STRIPE: 'stripe',
                SEPA: 'sepa',
                BUTTON: 'button',
                PAYMENTWALL: 'paymentwall',
                OFF: 'off',
                NOWPAYMENTS: 'nowpayments',
            },
            pickedPayPal: '<?=config(PAYPAL_MONTH_PLAN)?>',
            allPlansPayPal:{
                'USD' : [
                    {
                        planId:'<?=config(PAYPAL_YEAR_PLAN)?>',
                        name: '1 year'
                    },
                    {
                        planId:'<?=config(PAYPAL_MONTH_PLAN)?>',
                        name: '1 month'
                    }
                ]
            },
            selectedPlansPaypal:[
                {
                    planId:'<?=config(PAYPAL_YEAR_PLAN)?>',
                    name: '1 year'
                },
                {
                    planId:'<?=config(PAYPAL_MONTH_PLAN)?>',
                    name: '1 month'
                }
            ],
            pickedPeriod: Plans.YEAR,
            typePaySystem: '',
            email: '',
            password: '',
            deviceId: null,
            nameOnCard: '',
            surnameOnCard: '',
            errorMessage: '',
            plans: [
                {planId: 0, planPrice: 0},
                {planId: 0, planPrice: 0},
                {planId: 0, planPrice: 0},
                {planId: 0, planPrice: 0}
            ],
            client: null,
            newClient: true,
            paymentMethod: null,
            cardElement: null,
            cardElementSEPA: null,
            loading: false,
            loadingSepa: false,
            mid: null,
            readOnly: true,
            hideCreateAccount: false,
            localCurrency: 'USD',
            localCurrencyIndex: null,
            allPlansKeys: ['USD'],
            currencyCountryList: [ {'United States of America': 'USD'} ],
            allCurrenciesList: <?=json_encode($currencyCountryList)?>,
            defCountryIso: '',
            currencyMob: false,
            userLoc: false,
            errorMessageSEPA: '',
            allPlans: {},
            atDayDate:atDayDate,
            toDayDate:toDayDate,
            stepSelectedPlan:{
                "planId": "",
                "planPrice": 0.00,
                "currency": "USD",
                "planType": "1 month"
            },
            errorMessageExistAcc:'',
            errorMessageCreateAcc:'',
            periodForText:'',
            priceForText:'',
            paymentRequest: null,
            canMakePayment: true,
            methodName: "Your Saved Cards",
            prbMethod: "cards",
            nameSEPA:'',
            emailSEPA:'',
            v2Approve:true,
            clickEventOk: false,
            forTestCaptcha: '',
            cjEvent: null,
            cjData: null,
            confirmationUrl: window.location.origin + '/confirmation',
            orderUrl: window.location.origin + '/order',
            tempUserId: null,
            curPaySystem: null,
            prevPaySystem: null,
            curCountry: null,
            prevCountry: null,
            testTime: false,
        },
        computed: {
            isOrderPage() { return document.getElementById('payment-request-button') !== null; },
            selectedPlan() { return this.plans.find((p) => p.planName === this.pickedPeriod); },
            isCrypto() { return this.typePaySystem === this.PaySystem.COINPAYMENTS || this.typePaySystem === this.PaySystem.NOWPAYMENTS; },
            coinPaymentsAmount() {
                const plan = this.selectedPlan;
                if (plan) return plan.planPrice;
                return 1000000;
            },
            coinPaymentsDescription() {
                const plan = this.selectedPlan;
                if (!plan) return "Error: Invalid plan!";
                switch (plan.planType) {
                    case "Yearly": return "<?php esc_html_e('One year of service', 'hotbot'); ?>";
                    case "Semi-Yearly": return "<?php esc_html_e("Six months of service", 'hotbot'); ?>";
                    case "Monthly": return "<?php esc_html_e("One month of service", 'hotbot'); ?>";
                    default: return "Error: Invalid plan type!"
                }
            },
            quickPay() {
                <?php if (config(QUICK_PAY) === CONDITION): ?>
                    const uri = window.location.search.substring(1);
                    const params = new URLSearchParams(uri);
                    return params.has('q');
                <?php else: ?>
                    return <?=config(QUICK_PAY) === ENABLE ? 'true' : 'false'?>;
                <?php endif; ?>
            },
            pShow(){
                const urlPShow = new URL(window.location.href);
                const showPayS = urlPShow.searchParams.get('showPayService');
                if(showPayS){
                    console.log('showPayS ',showPayS);
                    if(showPayS === '60ad38af69234c03665b080f'){
                        console.log('60ad38af69234c03665b080f = ',showPayS);
                        this.showPayPal = true;
                    }
                }
                return this.showPayPal;
            },
            payPalBtnInit(){
                if (paypal && this.typePaySystem === this.PaySystem.PAYPAL) {
                    const plan = this.selectedPlan;
                    let indexPlan = this.plans.indexOf(plan);
                    if (indexPlan === -1 || !plan || !plan['planIdPayPal']) { return; }
                    let planP = plan.planIdPayPal;
                    console.log('selectedPlansPaypal ',planP);

                    if (!PPP) {
                        PPP = paypal.Buttons(
                            {
                                style: { size: 'responsive', color: 'blue' },
                                onClick: async (data,actions) => {
                                    if (!await this.checkAccountForm()) {
                                        return actions.reject();
                                    }
                                    if (!this.v2Approve) {
                                        this.setFormError("<?php esc_html_e("reCaptcha is unchecked", 'hotbot'); ?>");
                                        return actions.reject();
                                    }
                                    return actions.resolve();
                                },

                                onError: function (err) {
                                    console.log('err ', err);
                                },

                                createSubscription: async (data, actions) => {
                                    let planPC = this.currentPlanId();
                                    const id = await this.createTempUser();
                                    if (!id) return actions.reject();
                                    return actions['subscription'].create({ 'plan_id': planPC, custom_id: id });
                                },

                                onApprove: async (data, actions) => {
                                    const planPP = this.selectedPlan;
                                    sessionStorage.setItem('user', this.email);
                                    sessionStorage.setItem('transactionId', data['subscriptionID']);
                                    sessionStorage.setItem('currency', planPP['currency']);
                                    sessionStorage.setItem('planId', planPP['planIdPayPal']);
                                    sessionStorage.setItem('planPrice', this.newClient ? 0.0 : planPP['planPrice']);
                                    sessionStorage.setItem('planType', planPP['planType']);
                                    sessionStorage.setItem('processor', 'PayPal');
                                    sessionStorage.setItem('response', JSON.stringify(data));
                                    sessionStorage.setItem('planDuration', planPP['planName']);
                                    document.location.href = '/confirmation';
                                    return true;
                                }
                            }
                        );
                        PPP.render('#paypal-button-container');
                    }
                }
            },
            fullnameOnCard() {
                return (this.nameOnCard + ' ' + this.surnameOnCard).trim();
            },
            localCurrencyFn(){
                if (Object.keys(this.allPlans).length === 0) return;
                this.updateCountryList();
                if(this.allPlans[this.localCurrency]){
                    if(this.typePaySystem === this.PaySystem.PAYPAL){
                        let plansKPayPal = [];
                        Object.keys(this.allPlans).forEach(currency => {
                            if(this.getPlan(Plans.MONTH, this.allPlans[currency])['planIdPayPal']){
                                plansKPayPal.push(currency);
                            }
                        });

                        if (this.prevCurrency !== "" && this.localCurrency !== this.prevCurrency) {
                            this.localCurrency = this.prevCurrency;
                        }
                        if (plansKPayPal.length){
                            this.allPlansKeys = plansKPayPal.sort();
                            if (!plansKPayPal.includes(this.localCurrency)) {
                                this.localCurrency = 'USD';
                            }
                        } else {
                            this.allPlansKeys = ['USD'];
                        }
                    } else if (this.typePaySystem === this.PaySystem.SEPA){
                        this.localCurrency = 'EUR';
                        this.allPlansKeys = ['EUR'];
                    } else if (this.isCrypto) {
                        this.localCurrency = 'USD';
                        this.allPlansKeys = ['USD'];
                    } else {
                        if (this.prevCurrency !== "" && this.localCurrency !== this.prevCurrency) {
                            this.localCurrency = this.prevCurrency;
                        }
                        this.allPlansKeys = Object.keys(this.allPlans);
                        this.allPlansKeys = this.allPlansKeys.sort();
                    }

                    let pl = this.allPlans[this.localCurrency];
                    if(this.typePaySystem === this.PaySystem.PAYPAL){
                        if (!this.getPlan(Plans.MONTH, pl)['planIdPayPal']) {
                            this.localCurrency = 'USD';
                            pl = this.allPlans[this.localCurrency];
                        }
                    }
                    pl.sort((a, b) => b.planPrice - a.planPrice);

                    let useFormat = false;
                    let formatter = false;
                    try{
                        let userLang;
                        if(this.userLoc){
                            userLang = this.userLoc;
                        }else{
                            userLang = navigator.language || navigator.userLanguage;
                        }
                        if(!!userLang){
                            formatter = new Intl.NumberFormat(
                                userLang,
                                {
                                    style: "currency",
                                    currency: this.localCurrency
                                });
                            useFormat = true;
                        }
                    }catch (e){
                        useFormat = false;
                    }


                    this.plans = pl.map((item, i) => {
                        let oldIndex = this.planIndex(Plans.MONTH, pl);
                        let oldMonth = pl[oldIndex] ? pl[oldIndex].planPrice : 0;
                        let fPrice = useFormat && formatter? formatter.format(item.planPrice) : item.planPrice;
                        let mPriceDef;
                        let mPrice;
                        let pricePlanPayPal = item.planPricePayPal ?
                            useFormat && formatter? formatter.format(item.planPricePayPal) : this.priceFormat(item.planPricePayPal) :
                            null;
                        let freeTrial = useFormat && formatter? formatter.format(0) : 0;
                        let oldPrice = oldMonth;
                        if (item['planDuration'] === '48 months') {
                            mPriceDef = this.cents(item.planPrice / 48);
                            mPrice = useFormat && formatter? formatter.format(mPriceDef) : mPriceDef;
                            oldPrice = useFormat && formatter? formatter.format(oldPrice * 48) : mPriceDef;
                            return {
                                ...item,
                                monthPrice: mPrice,
                                formatPrice: fPrice,
                                freeTrial,
                                oldPrice,
                                pricePlanPayPal,
                                pricePlan: this.priceFormat(item.planPrice),
                                priceOld: this.priceFormat(this.cents(oldMonth * 48)),
                                priceMonth: this.priceFormat(mPriceDef),
                                priceTrial: this.priceFormat(0.0)
                            }
                        }
                        if (item.planDuration === '12 months') {
                            mPriceDef = this.cents(item.planPrice / 12);
                            mPrice = useFormat && formatter? formatter.format(mPriceDef) : mPriceDef;
                            oldPrice = useFormat && formatter? formatter.format(oldPrice * 12) : mPriceDef;
                            return {
                                ...item,
                                monthPrice: mPrice,
                                formatPrice: fPrice,
                                freeTrial,
                                oldPrice,
                                pricePlanPayPal,
                                pricePlan: this.priceFormat(item.planPrice),
                                priceOld: this.priceFormat(this.cents(oldMonth * 12)),
                                priceMonth: this.priceFormat(mPriceDef),
                                priceTrial: this.priceFormat(0.0)
                            }
                        }
                        if (item.planDuration === '6 months') {
                            mPriceDef = this.cents(item.planPrice / 6);
                            mPrice = useFormat && formatter? formatter.format(mPriceDef) : mPriceDef;
                            oldPrice = useFormat && formatter? formatter.format(oldPrice * 6) : mPriceDef;
                            return {
                                ...item,
                                monthPrice: mPrice,
                                formatPrice: fPrice,
                                freeTrial,
                                oldPrice,
                                pricePlanPayPal,
                                pricePlan: this.priceFormat(item.planPrice),
                                priceOld: this.priceFormat(this.cents(oldMonth * 6)),
                                priceMonth: this.priceFormat(mPriceDef),
                                priceTrial: this.priceFormat(0.0)
                            }
                        } else {
                            mPriceDef = this.cents(item.planPrice);
                            mPrice = useFormat && formatter? formatter.format(mPriceDef) : mPriceDef;

                            return {
                                ...item,
                                monthPrice: mPrice,
                                formatPrice: fPrice,
                                freeTrial,
                                oldPrice,
                                pricePlanPayPal,
                                pricePlan: this.priceFormat(item.planPrice),
                                priceOld: this.priceFormat(this.cents(oldMonth)),
                                priceMonth: this.priceFormat(mPriceDef),
                                priceTrial: this.priceFormat(0.0)
                            }
                        }
                    });
                }
                this.updateCountryList();
                return '';
            },
            submitDisabled() {
                return this.loading || !this.v2Approve || this.localCurrencyIndex === null;
            },
            submitDisabledSEPA() {
                return this.loadingSepaloadingSepa || this.localCurrencyIndex === null;
            },
            frTrialMonth(){
                let indexPlan = this.planIndex(Plans.MONTH);
                const plan = this.plans[indexPlan];

                let frTrial = '0.00';
                if(typeof plan === "object"){
                    if(Object.keys(plan).includes('freeTrial')){
                        frTrial = plan.freeTrial;
                    }
                }

                return this.newClient && indexPlan >= 0 ? frTrial : plan ? plan.formatPrice : 0;
            },
            textMonth(){
                return this.newClient?'':'/mo';
            },
            totalNumeric() {
                const plan = this.selectedPlan;
                let frTrial = 0.0;
                if (plan && plan.priceTrial) { frTrial = plan.priceTrial; }
                return this.priceFormat((this.newClient && !this.isCrypto) ? frTrial : (plan ? plan.planPrice : 0.0));
            },
            totalWithCurrency() {
                return this.getCurrency() + ' ' + this.totalNumeric
            },
            total() {
                const plan = this.selectedPlan;
                let frTrial = '0.00';
                if(typeof plan === "object"){
                    if(Object.keys(plan).includes('freeTrial')){
                        frTrial = plan.freeTrial;
                    }
                }
                return this.newClient ? frTrial : plan ? plan.formatPrice : 0;
            },
            buttonText(){
                const plan = this.selectedPlan;
                return this.newClient && !this.isCrypto && plan && plan.name != Plans.FOUR ?
                    "<?php esc_html_e('Start Free Trial', 'hotbot'); ?>" :
                    "<?php esc_html_e('Pay Now', 'hotbot'); ?>";
            },
            textUnderBtn(){
                let showText = false;
                const plan = this.selectedPlan;
                if (plan && this.newClient) {
                    switch (plan['planDuration']) {
                        case '12 months': this.periodForText = "<?php esc_html_e('/yr', 'hotbot'); ?>"; break;
                        case '6 months': this.periodForText = "<?php esc_html_e('/6 mo', 'hotbot'); ?>"; break;
                        case '48 months': this.periodForText = ""; break;
                        default: this.periodForText = "<?php esc_html_e('/mo', 'hotbot'); ?>"; break;
                    }
                    if (this.typePaySystem === this.PaySystem.PAYPAL) {
                        this.priceForText = plan['pricePlanPayPal'] || plan.formatPrice;
                    } else {
                        this.priceForText = plan.formatPrice ? plan.formatPrice : plan.planPrice;
                    }
                    showText = true;
                }else{
                    showText = false;
                }

                return showText;
            },
            infoFreeTrialForPlan(){
                return this.newClient ? '7 Day Free Trial' : '';
            },
            infoFreeTrialForPlanApp(){
                return this.newClient ? '7 Day Free Trial + ' : '';
            },
            isProduction() {
                return document.location.host === 'hotbotvpn.com'
            },
            urls() {
                const url = '<?=config(HOTBOT_API_URL)?>';
                return {
                    apiCreateTempUser: url + 'v1/auth/createTempUser',
                    addUserUrl: url + 'v1/auth/signup',
                    loginUrl: url + 'v1/auth/login',
                    getSubscription: url + 'v2/transaction/addStripeTransaction',
                    delSubscription: url + 'v1/transaction/delStripeTransaction/',
                    checkExpiry: url + 'v1/auth/checkExpiry/',
                    getStripeUser: url + 'v1/users/getStripeUser',
                    isExist: url + 'v1/users/isExist/',
                    paypalAddTransaction: url + 'v1/transaction/paypalAddTransaction',
                    sepaGet: url + 'v2/transaction/getStripeUserWithIntent',
                    sepaAdd: url + 'v2/transaction/addTransactionSepa',
                    nowpaymentsPrepareUrl: url + 'v1/transaction/nowpayments/prepareUrl'
                };
            },
            selectedCountry() {
                return this.localCurrencyIndex ?
                    this.currencyCountryList[this.localCurrencyIndex].country :
                    "";
            }
        },
        watch: {
            typePaySystem() {
                if (this.curPaySystem === null) {
                    this.prevTypeSystem = this.typePaySystem;
                    this.curPaySystem = this.typePaySystem;
                    this.prevCurrency = "";
                    this.prevCountry = "";
                    return;
                }
                if (this.curPaySystem !== this.typePaySystem) {
                    this.prevTypeSystem = this.curPaySystem;
                    this.curPaySystem = this.typePaySystem;
                    if (this.isCrypto) {
                        this.prevCurrency = this.localCurrency;
                        this.prevCountry = this.selectedCountry;
                    }
                }
            },
            email() {
                this.clearError();
                this.client = null;
            },
            password() {
                this.clearError();
                this.client = null;
            },
            nameSEPA() {
                this.clearError();
            },
            localCurrencyIndex() {
                this.localCurrency = this.currencyCountryList[this.localCurrencyIndex].currency;
                if (!this.isCrypto) {
                    this.prevCurrency = this.localCurrency;
                    this.prevCountry = this.selectedCountry;
                }
            }
        },
        async beforeCreate() {
            try {
                jQuery('#errorMessage').show();
                const url = new URL(window.location.href);
                let selectedPlan = url.searchParams.get('plan');
                if (!Number(selectedPlan)) { selectedPlan = null; }
                if(+selectedPlan === 0 && selectedPlan !== null){
                    selectedPlan = 0;
                }
                if(+selectedPlan<0 || +selectedPlan>4){
                    selectedPlan = 2;
                }
                // const response = await axios.get(getPlans);
                // const allPlans = await axios.get(getAllPlans);
                const allPlans = await allPlansT;

                let allPl = { plans: this.allPlans };

                if(allPlans.data){
                    if(typeof allPlans.data === "object"){
                        if(Object.keys(allPlans.data).includes('response')){
                            if(allPlans.data.response){
                                allPl.plans = allPlans.data.response.plans ? allPlans.data.response.plans : this.allPlans;
                            }
                        } else {
                            allPl.plans = allPlans.data.plans ? allPlans.data.plans : this.allPlans;
                        }
                    }
                }

                this.allPlans = allPl.plans;

                this.plans = this.allPlans[this.localCurrency].sort((a, b) => b.planPrice - a.planPrice);
                this.allPlansKeys = Object.keys(this.allPlans);
                this.allPlansKeys = this.allPlansKeys.sort();
                this.currencyCountryList =
                    this.allCurrenciesList.filter(x => this.allPlansKeys.includes(x.currency));

                let lcur = document.cookie
                    .split('; ')
                    .find(row => row.startsWith('defCurrencyTest'));
                const url2 = new URL(window.location.href);
                let currency = url2.searchParams.get('currency');
                let userLoc = url2.searchParams.get('language');

                if(currency){
                    this.currencyMob = currency;
                }
                if(userLoc){
                    this.userLoc = userLoc;
                }

                if(this.currencyMob){
                    this.localCurrency = this.currencyMob;
                } else if(lcur && !this.currencyMob){
                    lcur = lcur.split('=')[1];
                    this.localCurrency = lcur || 'USD';
                    if(!Object.keys(this.allPlans).includes(this.localCurrency)){
                        this.localCurrency = 'USD';
                    }else{
                        if(this.typePaySystem === this.PaySystem.PAYPAL){
                            console.log('this.allPlans[this.localCurrency]',this.allPlans[this.localCurrency]);
                            if(!this.getPlan(Plans.MONTH, this.allPlans[this.localCurrency])['planIdPayPal']) {
                                this.localCurrency = 'USD';
                            }
                        }
                    }
                } else{
                    this.localCurrency = 'USD';
                }
                // this.localCurrencyFn();

                this.cardElement = elements.create("card", {style});
                this.cardElementSEPA = elementsSepa.create("iban", {
                    supportedCountries: ['SEPA'],
                    placeholderCountry: 'DE',
                    style,
                });
                if ($('#card-element').length) { this.cardElement.mount("#card-element"); }
                if ($('#iban-element').length) { this.cardElementSEPA.mount("#iban-element"); }
                const clearPaymentMethod = () => {
                    this.clearError();
                    this.paymentMethod = null;
                };
                this.cardElement.on('change', function (event) {
                    clearPaymentMethod();
                    let displayError = document.getElementById('card-errors');
                    if (event.error) {
                        displayError.textContent = event.error.message;
                    } else {
                        displayError.textContent = '';
                    }
                });
                this.cardElementSEPA.on('change', function (event) {
                    clearPaymentMethod();
                    if (event.error) {
                        this.errorMessageSEPA = event.error.message;
                    } else {
                        this.errorMessageSEPA = '';
                    }
                });
            } catch (e) {
                this.errorMessage = "<?php esc_html_e("Something wrong on server. Try later.", 'hotbot'); ?>";
            }
        },
        async created() {
            if (isOrderFree) {
                this.pickedPeriod = Plans.MONTH;
            } else {
                const urlParams = new URL(window.location.href);
                let urlPlan = urlParams.searchParams.get('plan');
                if (!Plans.hasOwnProperty(urlPlan)) { urlPlan = null; }
                this.pickedPeriod = urlPlan ? Plans[urlPlan] : (isOrderPage ? DEFAULT_PLAN : Plans.HALF);
            }

            this.typePaySystem = this.PaySystem.STRIPE;
            const url = new URL(window.location.href);
            this.email = url.searchParams.get('email');
            this.password = url.searchParams.get('password');
            this.deviceId = url.searchParams.get('deviceId');
            let currency = url.searchParams.get('currency');
            let userLoc = url.searchParams.get('language');
            this.testTime = url.searchParams.get('testTime');
            if(currency){
                this.currencyMob = currency;
            }
            if(userLoc){
                this.userLoc = userLoc;
            }
            if (this.email) {
                // await this.checkAccountForm();
            }
            this.typePaySystem = this.PaySystem.PAYPAL;
            this.typePaySystem = this.PaySystem.STRIPE;
            this.createPaymentRequest();
            this.createPaymentRequestButton();

            this.cjEvent = getCookie('cjEvent');
            this.cjData = getCookie('cjData');

            this.defCountryIso = '<?=Countries::getDefault()?>';
        },
        async mounted() {
            try {
                const error = sessionStorage.getItem('errorMessage');
                if (error) { this.errorMessage = error; }

                const objAddTrStr = sessionStorage.getItem('objAddTr');
                const envStr = sessionStorage.getItem('processingEnv');
                if (objAddTrStr && envStr) {
                    const objAddTr = JSON.parse(objAddTrStr);
                    const env = JSON.parse(envStr);
                    this.email = objAddTr.email;
                    this.nameOnCard = env.nameOnCard;
                }

                if (isAccordion) {
                    this.typePaySystem = this.PaySystem.OFF;
                    $('#accordion-1').prop('checked', false);
                }
            } catch (e) {}
        },
        methods: {
            updateCountryList() {
                const newCnt = this.prevCountry || this.selectedCountry || 'United States';
                this.currencyCountryList =
                    this.allCurrenciesList.filter(x => this.allPlansKeys.includes(x.currency));
                if (this.defCountryIso !== '') {
                    const newIndex = this.currencyCountryList.findIndex(e => e.countryIso === this.defCountryIso);
                    if (newIndex !== -1) {
                        if (this.localCurrencyIndex !== newIndex) { this.localCurrencyIndex = newIndex; }
                    } else {
                        this.localCurrencyIndex = this.currencyCountryList.findIndex(e => e.countryIso === 'US');
                    }
                    this.defCountryIso = '';
                } else {
                    const newIndex = this.currencyCountryList.findIndex(e => e.country === newCnt);
                    if (newIndex !== -1) {
                        if (this.localCurrencyIndex !== newIndex) { this.localCurrencyIndex = newIndex; }
                    } else {
                        this.localCurrencyIndex = this.currencyCountryList.findIndex(e => e.countryIso === 'US');
                    }
                }
            },
            planIndex(name, plans = null) {
                try {
                    if (!plans) { plans = this.plans; }
                    for (let i = 1; i < 4; i++) {
                        if (name === plans[i]['planName']) { return i; }
                    }
                } catch (e) {}
                return 0;
            },
            getPlan(name, plans = null) {
                try {
                    if (!plans) { plans = this.plans; }
                    for (let i = 0; i < plans.length; i++) {
                        if (name === plans[i]['planName']) { return plans[i]; }
                    }
                } catch (e) {}
                if (plans) return plans[0];
                else return {};
            },
            getPrice(name) {
                const plan = this.getPlan(name);
                if (this.typePaySystem !== this.PaySystem.PAYPAL) return plan.pricePlan;
                return plan.pricePlanPayPal || plan.pricePlan;
            },
            currentPrice() {
                return this.getPrice(this.pickedPeriod);
            },
            currentPlanId() {
                const plan = this.selectedPlan;
                if (!plan) return null;
                if (this.typePaySystem !== this.PaySystem.PAYPAL) return plan.planId;
                return plan['planIdPayPal'] || plan.planId;
            },
            getCurrency() {
                return this.getPlan(Plans.MONTH).currency;
            },
            updateSession(processor, transactionId = '', trial = false, data = null) {
                sessionStorage.setItem('user', this.email);
                sessionStorage.setItem('transactionId', transactionId);
                sessionStorage.setItem('currency', this.selectedPlan.currency);
                sessionStorage.setItem('planId', this.currentPlanId());
                sessionStorage.setItem('planPrice', trial ? 0.0 : this.selectedPlan.planPrice);
                sessionStorage.setItem('planType', this.selectedPlan.planType);
                sessionStorage.setItem('processor', processor);
                sessionStorage.setItem('response', JSON.stringify(data || {}));
                sessionStorage.setItem('planDuration', this.selectedPlan.planName);
            },
            jump(h){
                const url = location.href;               //Save down the URL without hash.
                location.href = "#" + h;                 //Go to the target element.
                history.replaceState(null, null, url);   //Don't like hashes. Changing it back.
            },
            setFormError(message, anchor = 'createAnchor', messageVar = null) {
                if (!messageVar) {
                    if (this.newClient) { this.errorMessageCreateAcc = message; }
                    else { this.errorMessageExistAcc = message; }
                } else {
                    this[messageVar] = message;
                }
                this.jump(anchor);
                return false;
            },
            async checkAccountForm(allowSub = false) {
                if (!this.email || !this.email.trim()) {
                    return this.setFormError("<?php esc_html_e("Please fill out the Email field", 'hotbot'); ?>");
                }

                if (this.newClient) {
                    if (!this.password) {
                        return this.setFormError('<?php esc_html_e("Please fill out the Password field", 'hotbot'); ?>');
                    }
                    if (this.password.search(' ') !== -1) {
                        return this.setFormError("<?php esc_html_e("Spaces in the Password are not allowed", 'hotbot'); ?>");
                    }
                    if (this.password.length < 8) {
                        return this.setFormError('<?php esc_html_e("Password must not be less than 8 characters", 'hotbot'); ?>');
                    }
                    if (this.password.search(/^[a-zA-Z!@^>?"-=|\[\]{}`~_\\]{8,}$/) === -1
                    ) {
                        return this.setFormError('<?php esc_html_e("Invalid characters are used in the password", 'hotbot'); ?>');
                    }
                }

                if (this.typePaySystem === this.PaySystem.STRIPE && !this.fullnameOnCard) {
                    return this.setFormError('<?php esc_html_e("Please fill out cardholder name", 'hotbot'); ?>', 'paymentInfoAnchor', 'errorMessage');
                }

                return await fetch(
                    '<?=config(HOTBOT_API_URL)?>v1/auth/checkUserInService',
                    {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ checkSub: true, email: this.email.toLowerCase() })
                    }
                )
                .then((resData) => { return resData.json(); })
                .then((dataFetch) => {
                    if (dataFetch.response.status === 500) {
                        let errM = dataFetch.response.message;
                        if (dataFetch.response.message === "Invalid fields: email.") {
                            errM = "<?php esc_html_e("Incorrect Email Address", 'hotbot'); ?>"
                        }
                        return this.setFormError(errM);
                    }

                    if (dataFetch.response.status === 404 && !this.newClient) {
                        return this.setFormError('<?php esc_html_e("The email you entered does not exists", 'hotbot'); ?>');
                    }

                    if (dataFetch.response.data.sub && !allowSub){
                        return this.setFormError(dataFetch.response.message);
                    } else if (dataFetch.response.data.userId && this.newClient){
                        return this.setFormError('<?php esc_html_e("The email you entered already exists", 'hotbot'); ?>');
                    }

                    return true;
                })
                .catch(e => {
                    return this.setFormError(e.message);
                });
            },
            checkUserRequestSync() {
                const request = new XMLHttpRequest();
                request.open('POST', '<?=config(HOTBOT_API_URL)?>v1/auth/checkUserInService', false);
                request.setRequestHeader('Content-Type', 'application/json');
                request.send(JSON.stringify({ checkSub: true, email: this.email.toLowerCase() }));
                return JSON.parse(request.responseText);
            },
            checkForm() {
                if (!this.email || !this.email.trim()) {
                    return this.setFormError("<?php esc_html_e("Please fill out the Email field", 'hotbot'); ?>");
                }

                if (this.newClient) {
                    if (this.password.search(' ') !== -1) {
                        return this.setFormError("<?php esc_html_e("Spaces in the Password are not allowed", 'hotbot'); ?>");
                    }
                    if (!this.password) {
                        return this.setFormError('<?php esc_html_e("Please fill out the Password field", 'hotbot'); ?>');
                    }
                    if (this.password.length < 8) {
                        return this.setFormError('<?php esc_html_e("Password must not be less than 8 characters", 'hotbot'); ?>');
                    }
                    if (this.password.search(/^[a-zA-Z!@^>?"-=|\[\]{}`~_\\]{8,}$/) === -1
                    ) {
                        return this.setFormError('<?php esc_html_e("Invalid characters are used in the password", 'hotbot'); ?>');
                    }
                }

                if (this.typePaySystem === this.PaySystem.STRIPE && !this.fullnameOnCard) {
                    return this.setFormError('<?php esc_html_e("Please fill out cardholder name", 'hotbot'); ?>', 'paymentInfoAnchor', 'errorMessage');
                }

                return true;
            },
            checkUserResponse(dataFetch, allowSub = false) {
                if (dataFetch.response.status === 500) {
                    let errM = dataFetch.response.message;
                    if (dataFetch.response.message === "Invalid fields: email.") {
                        errM = "<?php esc_html_e("Incorrect Email Address", 'hotbot'); ?>"
                    }
                    return this.setFormError(errM);
                }

                if (dataFetch.response.status === 404 && !this.newClient) {
                    return this.setFormError('<?php esc_html_e("The email you entered does not exists", 'hotbot'); ?>');
                }

                if (dataFetch.response.data.sub && !allowSub){
                    return this.setFormError(dataFetch.response.message);
                } else if (dataFetch.response.data.userId && this.newClient){
                    return this.setFormError('<?php esc_html_e("The email you entered already exists", 'hotbot'); ?>');
                }

                return true;
            },
            checkUserSync(allowSub = false) {
                return this.checkUserResponse(this.checkUserRequestSync(), allowSub);
            },
            checkAccountFormSync(allowSub = false) {
                try {
                    if (this.checkForm()) { return this.checkUserSync(allowSub); }
                } catch (e) {
                    return this.setFormError(e.message);
                }
            },
            async cryptoPaymentPreSubmit() {
                if (!await this.checkAccountForm(true)) { return; }
                this.updateSession('nowpayments');
                if (this.newClient) {
                    this.tempUserId = await this.createTempUser(true);
                    if (this.tempUserId === null) return;
                }
                const paymentUrl = await this.npPrepareUrl();
                if (paymentUrl === null) return;
                document.location.href = paymentUrl;
            },
            async createTempUser(noPartner = false) {
                const tempUser = {
                    email: this.email,
                    password: this.newClient ? this.password : null,
                    partnerParams: noPartner ? null : this.getPartnerParams()
                };
                const apiResponse = await axios.post(this.urls.apiCreateTempUser, tempUser)
                .catch(err => {
                    this.setFormError("<?php esc_html_e("Server error! Please try again.", 'hotbot'); ?>");
                    console.log('Error', err.message);
                    return null;
                });
                if (apiResponse.status === 200) return apiResponse.data.response.id;

                this.setFormError("<?php esc_html_e("Server error! Please try again.", 'hotbot'); ?>");
                return null;
            },
            async npPrepareUrl() {
                const params = {
                    email: this.email,
                    tempUserId: this.tempUserId,
                    planId: this.currentPlanId()
                };
                const apiResponse = await axios.post(this.urls.nowpaymentsPrepareUrl, params)
                    .catch(err => {
                        this.setFormError("<?php esc_html_e("Server error! Please try again.", 'hotbot'); ?>");
                        console.log('Error', err.message);
                        return null;
                    });
                if (apiResponse.status === 200) return apiResponse.data.response.data.url;

                this.setFormError("<?php esc_html_e("Server error! Please try again.", 'hotbot'); ?>");
                return null;
            },
            getPartnerParams() {
                if (this.cjEvent || this.cjData) {
                    const params = JSON.stringify({ cjevent: this.cjEvent, cjdata: this.cjData });
                    return JSON.stringify({ service: "cj", params });
                }

                return null;
            },
            addPartnerParams(obj) {
                if (this.cjEvent || this.cjData) {
                    obj['cjParams'] = JSON.stringify({ cjevent: this.cjEvent, cjdata: this.cjData });
                }
            },
            v2ApproveFn() {
                this.clearError();
                this.v2Approve = true;
            },
            createPaymentRequest() {
                this.paymentRequest = stripe.paymentRequest({
                    country: 'US',
                    currency: this.localCurrency.toLowerCase(),
                    total: {
                        amount: 0,
                        label: 'HotBot VPN Premium'
                    },
                    requestPayerEmail: true,
                    requestPayerName: true
                });
                this.paymentRequest.on('paymentmethod', (event) => {
                    this.paymentMethod = event.paymentMethod;
                    event.complete('success');
                    this.onSubmit(true, false);
                });
            },
            updatePaymentRequest() {
                const plan = this.selectedPlan;
                if (this.paymentRequest) {
                    this.paymentRequest.update({
                        currency: this.localCurrency.toLowerCase(),
                        total: {
                            amount: this.newClient ? 0 : plan.planPrice * 100,
                            label: 'HotBot VPN Premium'
                        }
                    });
                }
            },
            createPaymentRequestButton() {
                const elements = stripe.elements();
                const prButton = elements.create('paymentRequestButton', { paymentRequest: this.paymentRequest });
                prButton.on('click', (event) => {
                    if (!this.checkAccountFormSync()) {
                        event.preventDefault();
                        return;
                    }
                    if (!this.v2Approve) {
                        this.errorMessage = '<?php esc_html_e("reCaptcha is unchecked", 'hotbot'); ?>';
                        event.preventDefault();
                        return;
                    }
                    if (!this.clickEventOk) {
                        event.preventDefault();
                        this.updatePaymentRequest();
                        this.clearError();
                        this.clickEventOk = true;
                        if (prButton.click) { prButton.click(); }
                    }
                });

                this.paymentRequest.canMakePayment().then((result) => {
                        if (this.quickPay && result && this.isOrderPage) {
                            prButton.mount('#payment-request-button');
                            this.canMakePayment = true;
                            // this.typePaySystem = this.PaySystem.BUTTON;
                            if (result.applePay) {
                                this.methodName = "Apple Pay";
                                this.prbMethod = "apple";
                            } else if (result.googlePay) {
                                this.methodName = "Google Pay";
                                this.prbMethod = "google";
                            } else {
                                this.methodName = "Quick Pay";
                                this.prbMethod = "cards";
                            }
                        } else {
                            this.canMakePayment = false;
                        }
                    }
                );
            },
            trialPrice(indexPlan){
                const plan = this.plans[indexPlan];

                let frTrial = '0.00';
                if(typeof plan === "object"){
                    if(Object.keys(plan).includes('freeTrial')){
                        frTrial = plan.freeTrial
                    }
                }

                return this.newClient && indexPlan >= 0 ? frTrial : plan ? plan.monthPrice : 0;
            },
            trialPriceNumeric(indexPlan) {
                const plan = this.plans[indexPlan];

                const zero = this.priceFormat(0)
                let frTrial = zero;
                if(typeof plan === "object"){
                    if(Object.keys(plan).includes('freeTrial')){
                        frTrial = plan.priceTrial
                    }
                }

                return this.newClient && indexPlan >= 0 && this.showZeroTrial ? frTrial : plan ? plan.priceMonth : zero;
            },
            getEmailCheck(){
                return document.querySelector('.form__group input[type=email]').value;
            },
            async getClient() {
                const {email, newClient} = this;
                const client = await axios.post(
                    this.urls.getStripeUser,
                    {email:email.toLowerCase(), newClient},
                );
                this.client = client.data;
            },
            async subscribe(trial = true, token = 'stage') {
                if (this.typePaySystem === this.PaySystem.SEPA){
                    this.loadingSepa = true;
                } else {
                    this.loading = true;
                }
                if (this.typePaySystem === this.PaySystem.BUTTON && this.prbMethod !== 'cards') {
                    this.errorMessage = '<?php esc_html_e("Processing..... Please Wait", 'hotbot'); ?>';
                } else this.clearError();
                try {
                    if (this.typePaySystem === this.PaySystem.SEPA){
                        const getprmSepa = await axios.post(this.urls.sepaGet,{
                            email: this.email.toLowerCase(),
                            newClient:this.newClient,
                            token
                        });

                        const sDebit = await stripe.confirmSepaDebitSetup(
                            getprmSepa.data.setupIntent,
                            {
                                payment_method: {
                                    sepa_debit: this.cardElementSEPA,
                                    billing_details: {
                                        name: this.nameSEPA,
                                        email: this.email.toLowerCase(),
                                    },
                                },
                            }
                        );

                        const plan = this.selectedPlan;
                        const endSepa = await axios.post(this.urls.sepaAdd,{
                            priceId: plan.planId,
                            customerId:getprmSepa.data.customerId,
                            paymentMethodId:sDebit.setupIntent.payment_method,
                            newClient:this.newClient,
                            scope: getprmSepa.data.scope || 1,
                            email:this.email,
                            password:this.password,
                            testTime: true
                        }).catch(e=>{
                            console.log('error',e);
                        });

                        this.loading = false;
                        this.loadingSepa = false;

                        sessionStorage.setItem('user', this.email);
                        sessionStorage.setItem('transactionId', endSepa.data.response.data.transactionId);
                        sessionStorage.setItem('currency', plan.currency);
                        sessionStorage.setItem('planId', plan.planId);
                        sessionStorage.setItem('planPrice', this.newClient ? 0.0 : plan.planPrice);
                        sessionStorage.setItem('planType', plan.planType);
                        sessionStorage.setItem('processor', 'sepa');
                        sessionStorage.setItem('response', JSON.stringify(endSepa.data));
                        sessionStorage.setItem('planDuration', plan.planName);
                        document.location.href = '/confirmation';

                        return;
                    }

                    //1. PaymentMethod
                    if (!this.paymentMethod) {
                        const response = await stripe.createPaymentMethod({
                            type: 'card',
                            card: this.cardElement,
                            billing_details: {
                                name: this.fullnameOnCard,
                            },
                        });
                        this.paymentMethod = response.paymentMethod;
                    }
                    if (!this.paymentMethod) throw new Error('<?php esc_html_e("Card data entry error", 'hotbot'); ?>');

                    //3. AddTransaction
                    const objAddTr = {
                    	<?php echo $trackingSource? "trSource:".json_encode($trackingSource).",\n" : ""; ?>
                        paymentMethodId: this.paymentMethod.id,
                        priceId: this.currentPlanId(),
                        email: this.email.toLowerCase(),
                        deviceType: 'web',
                        password: this.password,
                        new: this.newClient,
                        currency: this.localCurrency
                    };
                    this.addPartnerParams(objAddTr);

                    if (token !== 'stage') { objAddTr.token = token; }
                    if (!trial) { objAddTr.skipTrial = true; }
                    if (this.testTime) { objAddTr.testTime = true }

                    const plan = this.selectedPlan;
                    const env = {
                        urls: this.urls,
                        plan,
                        email: this.email,
                        newClient: this.newClient,
                        nameOnCard: this.nameOnCard,
                        isProduction: this.isProduction,
                        orderFree: isOrderFree,
                        accordion: isAccordion
                    };
                    sessionStorage.setItem('objAddTr', JSON.stringify(objAddTr));
                    sessionStorage.setItem('processingEnv', JSON.stringify(env));
                    document.location.href = '/processing';
                } catch (error) {
                    this.loading = false;
                    this.loadingSepa = false;

                    let message;
                    if (error.response) {
                        message = error.response.data.error
                            ? error.response.data.error.message
                            : error.response.data.response
                                ? error.response.data.response.message
                                : '<?php esc_html_e("Something wrong on server. Try later.", 'hotbot'); ?>';
                    } else if (error.message) {
                        message = error.message
                    }
                    if (message === "card was used") {
                        let trialDialog = document.getElementById('trialDialog');
                        trialDialog.classList.add('is-open');
                    } else {
                        if(this.typePaySystem === this.PaySystem.SEPA){
                            this.errorMessageSEPA = message;
                        }else{
                            this.errorMessage = message;
                        }
                    }
                }
                this.loading = false;
                this.loadingSepa = false;
            },
            onCancelDialog() {
                let trialDialog = document.getElementById('trialDialog');
                trialDialog.classList.remove('is-open');
            },
            async onSubmit(trial = true, ourButton = true) {
                if (!await this.checkAccountForm()) {
                    return;
                }
                if (this.typePaySystem === this.PaySystem.BUTTON && this.prbMethod === 'cards' && ourButton) {
                    this.updatePaymentRequest();
                    this.clearError();
                    this.paymentRequest.show();
                    return;
                }

                if (!trial) { this.onCancelDialog(); }

                if (this.isProduction) {
                    grecaptcha.ready(()=> {
                        grecaptcha
                            .execute('<?=config(RECAPTCHA_SITE_KEY)?>', {action: 'submit'})
                            .then(async (token) => { await this.subscribe(trial, token); });
                    });
                } else {
                    await this.subscribe(trial);
                }
            },
            clearError() {
                this.errorMessage = '';
                this.errorMessageExistAcc = '';
                this.errorMessageCreateAcc = '';
                this.errorMessageSEPA = '';
            },
            changeReadOnly() {
                if (!this.hideCreateAccount) {
                    this.readOnly = false;
                }
            },
            cents(amount) {
                return Math.round(amount * 100) / 100;
            },
            priceFormat(amount) {
                return Intl.NumberFormat("en-US", {maximumFractionDigits: 2, minimumFractionDigits: 2}).format(amount);
            }
        }
    });
</script>
