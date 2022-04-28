jQuery.validator.addMethod("emailstudent", function (value, element) {
        return this.optional(element) || /^.+@(student\.umn\.ac\.id|lecturer\.umn\.ac\.id|umn\.ac\.id)$/.test(value);
    }, "Email harus menggunakan email student atau email dari UMN"
);
$( "#form-login" ).validate({
    rules: {
      Email: {
        required: true,
        emailstudent: true
      },
      password: {
          required: true,
      }
    },
    messages: {
        Email: {
            required: 'The Email field is required',
            emailstudent: 'Email should be filled with you Student Email.'
        },
        password: {
            required: 'The password field is required.'
        }
    }
});