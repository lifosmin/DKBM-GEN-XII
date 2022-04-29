jQuery.validator.addMethod("emailstudent", function (value, element) {
        return this.optional(element) || /^.+@(student\.umn\.ac\.id|lecturer\.umn\.ac\.id|umn\.ac\.id)$/.test(value);
    }, "Email harus menggunakan email student atau email dari UMN"
);
$( "#form-login" ).validate({
    rules: {
      Email: {
        required: true,
        email: true,
        emailstudent: true,
      },
      password: {
          required: true,
      }
    },
    messages: {
        Email: {
            required: 'Kolom Email harus diisi.',
            email: 'Email harus diisi dengan alamat email yang sah.',
            emailstudent: 'Email harus menggunakan Email Student.'
        },
        password: {
            required: 'Kolom kata sandi harus diisi.'
        }
    }
});