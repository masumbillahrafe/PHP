const form = document.querySelector("form"),
  statusTxt = form.querySelector("form span"),
  btn = form.querySelector("form .re_btn button");

form.submitForm = (e) => {
  e.preventDefault();
  statusTxt.style.display = "initial";
  btn.style.backgroundColor = "#41f34d";

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "message.php", true);
  console.log(xhr);
  xhr.onload = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      let response = xhr.response;
      console.log(response);
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
};
