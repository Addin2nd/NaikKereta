// function


function searchInList(select, num) {
  const list = getAll(".list-group-item" + num);
  const filter = get("#" + select).value.toUpperCase();

  for (i = 0; i < list.length; i++) {
    const txtValue = list[i].innerText || list[i].textContent;

    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      list[i].style.display = "";
    } else {
      list[i].style.display = "none";
    }
  }
}


function ValidateEmail(r) {
  const id = r.getAttribute("id");
  if (
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(
      r.value
    )
  ) {
    get("#" + id + "EmailValidate").innerHTML = "";
    return true;
  }
  get("#" + id + "EmailValidate").innerHTML = "Alamat Email tidak valid";
  return false;
}

function justText(r) {
  const id = r.getAttribute("id");
  if (/^[a-zA-Z].[a-z A-Z]*$/.test(r.value)) {
    get("#" + id + "TextValidate").innerHTML = "";
    return true;
  }
  get("#" + id + "TextValidate").innerHTML = "Hanya menggunakan boleh huruf";
  return false;
}

function justPassword(r, report = true) {
  const id = r.getAttribute("id");
  if (r.value == "") {
    if (report) {
      get("#" + id + "PasswordValidate").innerHTML = "Harus diisi";
    }
    return false;
  } else if (r.value.length < 5) {
    if (report) {
      get("#" + id + "PasswordValidate").innerHTML = "Minimal 5 karakter";
    }
    return false;
  } else if (r.value.length > 21) {
    if (report) {
      get("#" + id + "PasswordValidate").innerHTML = "Maksimal 21 karakter";
    }
    return false;
  } else {
    if (report) {
      get("#" + id + "PasswordValidate").innerHTML = "";
    }
    return true;
  }
}

function justUsername(r, report = true) {
  const id = r.getAttribute("id");
  if (r.value == "") {
    if (report) {
      get("#" + id + "UsernameValidate").innerHTML = "Harus diisi";
    }
    return false;
  } else if (r.value.length < 5) {
    if (report) {
      get("#" + id + "UsernameValidate").innerHTML = "Minimal 5 karakter";
    }
    return false;
  } else if (r.value.length > 11) {
    if (report) {
      get("#" + id + "UsernameValidate").innerHTML = "Maksimal 10 karakter";
    }
    return false;
  } else if (/^[a-zA-Z0-9]*$/.test(r.value)) {
    if (report) {
      get("#" + id + "UsernameValidate").innerHTML = "";
    }
    return true;
  } else {
    if (report) {
      get("#" + id + "UsernameValidate").innerHTML =
        "Hanya boleh menggunakan huruf dan angka";
    }
    return false;
  }
}
