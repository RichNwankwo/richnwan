new Vue({

    el: '#contactForm',
    data:{
        name: '',
        email: '',
        message: '',
        namePass: false,
        nameFail: false,
        emailPass: false,
        emailFail:false,
        messagePass:false,
        messageFail:false
    },

    methods: {
        validate: function(msg, event){
            var nameValid    = this.validateName(this.name);
            var messageValid = this.validateMessage(this.message);
            var emailValid   = this.validateEmail(this.email);

            if(! nameValid || ! messageValid || ! emailValid){
                alert("Your message was not sent!!!");
                return false;
            }
            else{$('#contactForm').trigger('submit')}
        },

        validateName: function(){
            var valid = (this.name != "" ? true :  false);
            this.namePass = valid;
            this.nameFail = !valid;
            return valid;
        },

        validateMessage: function(){
            var valid = (this.message != "" ? true :  false);
            this.messagePass = valid;
            this.messageFail = !valid;
            return valid;
        },

        validateEmail: function(){
            var valid = (this.email != "" ? true :  false);
            this.emailPass = valid;
            this.emailFail = !valid;
            return valid;
        }
    }


})