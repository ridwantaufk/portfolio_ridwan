function SubmitFormData() {
  let name = $("#name").val();
  let email = $("#email").val();
  let subject = $("#subject").val();
  let message = $("#message").val();

  if (name != "" && message != "") {
    $.post(
      "php/data.php",
      {
        name: name,
        email: email,
        subject: subject,
        message: message,
      },
      function (data) {
        $("#results").html(data);
        $("#contactForm")[0].reset();
      }
    );
    document.getElementById("warning-name").innerHTML = "";
    document.getElementById("warning-message").innerHTML = "";
  } else if (name == "") {
    document.getElementById("warning-name").innerHTML = "*Nama Wajib Diisi !";
    setInterval(() => {
      document.getElementById("warning-name").innerHTML = "";
    }, 10000);
  } else if (message == "") {
    document.getElementById("warning-message").innerHTML =
      "*Pesan Wajib Diisi !";
    setInterval(() => {
      document.getElementById("warning-message").innerHTML = "";
    }, 10000);
  }
}
