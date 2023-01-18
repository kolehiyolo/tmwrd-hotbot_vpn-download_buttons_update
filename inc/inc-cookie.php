<script>
    /**
     * Returns the value of a specified cookie
     * @param name Cookie name
     * @return The value of cookie
     */
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length >= 2) return parts.pop().split(';').shift();
        else return null;
    }

    /**
     * Sets the cookie for a specified number of days
     * @param name Cookie name
     * @param value The value of cookie
     * @param days Lifetime in days
     * @param secure Cookie will be sent in HTTPS transmission only
     */
    function setCookie(name, value, days = 0, secure = false) {
        const maxAge = days ? "; max-age=" + (60 * 60 * 24 * days) : "";
        const secureParam = secure ? '; secure' : ''
        document.cookie = name + "=" + (value || "") + '; path=/' + maxAge + secureParam;
    }
</script>
