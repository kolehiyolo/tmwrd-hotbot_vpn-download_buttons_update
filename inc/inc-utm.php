<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<script>
    jQuery(function () {
        const queryString = window.location.search.replace('?', '');//.replace('utm_source', 'referrer=utm_source');
        const cookie = Cookies.get('queryString');
        const resultString = queryString || cookie;

        if (queryString) {
            Cookies.set('queryString', queryString, {expires: 1});
        }

        const utmTags = {
            utm_source: 'hotbotvpn.com',
            utm_medium: 'website',
            utm_campaign: 'direct-website',//-{url/path}
            utm_content: 'badge', //-{android/ios}
            // utm_term: 'term',
        };

        if (resultString) {
            resultString
                .split('&')
                .forEach((pair) => {
                    const keyValue = pair.split('=');
                    Object.assign(utmTags, {[keyValue[0]]: keyValue[1]});
                });
        }

        let href = `https://play.google.com/store/apps/details?id=com.hotbotvpn`;
        jQuery('[id=playstore]').each((key, a) => {
            jQuery(a).attr('href', href);
        });

        href = `https://apps.apple.com/us/app/hotbot-vpn/id1488136863`;

        jQuery('[id=appstore]').each((key, a) => {
            jQuery(a).attr('href', href);
        });

        window.planProcessor = sessionStorage.getItem('processor');
        window.planId = sessionStorage.getItem('planId');
        window.planPrice = sessionStorage.getItem('planPrice');
        window.planType = sessionStorage.getItem('planType');
        if (planId) {
            jQuery('#planInfo')
                .attr('plan-processor', planProcessor)
                .attr('plan-id', planId)
                .attr('plan-type', planType)
                .attr('plan-price', planPrice);
            const response = sessionStorage.getItem('response');
//            if (typeof window.JSChoosePlan !== 'undefined') {
//                if (JSON.parse(response).response.transactionId) {
//                    window.JSChoosePlan.complete(response);
//                } else {
//                    window.JSChoosePlan.loginAfterComplete(response);
//                }
//            }
        }

        /*if (queryString || cookie) {
         jQuery('[id=playstore]').each((key, a) => {
         const href = jQuery(a).attr('href');
         //jQuery(a).attr('href', href + (queryString || cookie));
         jQuery(a).attr('href', hrefTemplate);
         });

         }*/
    });
</script>
