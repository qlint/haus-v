window.croppNewsletter = {
    cookieName: 'newsletterCookie=',
    setCookie: function(value) {
        var day = new Date(),
            expires = 'expires=';

        day.setTime(day.getTime() + (30 * 24 * 60 * 60 * 1000));
        expires += day.toUTCString();

        document.cookie = this.cookieName + value + '; ' + expires + '; path=/';
    },
    getCookieValue: function() {
        var cookies = document.cookie.split(';'),
            cookiesNumber = cookies.length,
            i,
            cookie;

        for (i = 0; i < cookiesNumber; i++) {
            cookie = cookies[i].trim();

            if (cookie.indexOf(this.cookieName) === 0) {
                return cookie.substring(this.cookieName.length);
            }
        }
        return '';
    },
    checkCookie: function(force) {
        var currentCookieValue = this.getCookieValue();
        if (/newsletter|subscri|checkout/.exec(document.location.href)) {
            return false;
        }
        var isLogged = window.isLogged || undefined,
            isSubscribed = window.isSubscribed || undefined;
        if (isLogged && isSubscribed) {
            this.setCookie(3);
            return;
        }

        if (currentCookieValue === '' && !force) {
            this.setCookie(1);
        } else if (parseInt(currentCookieValue) === 1 && !force) {
            this.setCookie(parseInt(++currentCookieValue));
        } else if (parseInt(currentCookieValue) === 2 || force) {
            var newsletterPopup = document.getElementById('newsletterPopup');
            newsletterPopup.style.display = 'block';
            this.form.init();
            this.bindPopupActions();
            this.completeSubscriptionPlace();

            if (!force) {
                this.setCookie(3);
            }
        }
    },
    completeSubscriptionPlace: function() {
        var aiSubscriptionPlace = document.getElementById('aiSubscriptionPlace');
        if (!aiSubscriptionPlace) {
            return;
        }
        aiSubscriptionPlace.value = 'popup';
    },
    bindPopupActions: function() {
        var closeButton = document.getElementById('closeNewsletterPopupButton');
        this.newsletterOverlay = document.getElementById('newsletterPopup');

        if (!closeButton || !this.newsletterOverlay) {
            return;
        }

        closeButton.addEventListener('click', this.closePopup.bind(this));
        this.newsletterOverlay.addEventListener('click', this.closeOnOverlay.bind(this));
        document.addEventListener('keydown', this.closeOnEsc.bind(this));
    },
    newsletterOverlay: null,
    closePopup: function(event) {
        event.stopPropagation();
        this.newsletterOverlay.style.display = 'none';
    },
    closeOnEsc: function(event) {
        if (event.key === 'Escape') {
            this.closePopup(event);
        }
    },
    closeOnOverlay: function(event) {
        event.stopPropagation();
        if (event.target === this.newsletterOverlay) {
            this.closePopup(event);
        }
    },
    form: {
        init: function() {
            this.rules = getValidationRules();
            this.validation();
        },
        rules: null,
        validation: function() {
            var _this = this,
                newsletterForm = document.getElementById('newsletterCmsPage');
            if (!newsletterForm) {
                return;
            }
            jQuery(newsletterForm).validate({
                rules: {
                    email: {
                        required: _this.rules.customer_email.is_required,
                        pattern: _this.rules.customer_email.pattern_validation,
                        email: false
                    },
                    'newsletterTerms': {
                        required: true
                    }
                },
                messages: {
                    email: {
                        required: _this.rules.customer_email.validation_key_required,
                        pattern: _this.rules.customer_email.validation_key_illegal
                    },
                    'newsletterTerms': {
                        required: _this.rules.customer_address_additional_information.validation_key_required
                    }
                },
                submitHandler: function(form) {
                    var email = document.getElementById('newsletterMail'),
                        subscriptionPlace = document.getElementById('aiSubscriptionPlace');
                    jQuery.ajax({
                        url: form.action,
                        data: {
                            email: email.value,
                            subscriptionPlace: subscriptionPlace.value
                        },
                        dataType: 'json',
                        method: 'POST',
                        success: function(response) {
                            window.location.replace(response.url);
                        }
                    });
                }
            });
        }
    }
};
