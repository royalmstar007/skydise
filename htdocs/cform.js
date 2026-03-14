function emailSend(){
    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "skydise@gmail.com",
        Password : "D2F5D4336306FEF08BB98FA90C0AA782D670",
        To : 'skydise.contact@gmail.com',
        From : "skydise@gmail.com",
        Subject : "This is the subject",
        Body : "And this is the body"
    }).then(
      message => alert(message)
    );
}

