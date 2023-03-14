function SubmitFormData() {
  let name = $("#name").val();
  let email = $("#email").val();
  let subject = $("#subject").val();
  let message = $("#message").val();

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
      $("#contactForm").reset();
    }
  );
}
