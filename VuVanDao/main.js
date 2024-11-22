var birthday, birthmonth, birthyear;
function myFunction(id) {
  switch (id) {
    case "birthday":
      var x = document.getElementById("birthday").value;
      console.log("<<<<< birthday", x);
      break;
    case "birthmonth":
      var x = document.getElementById("birthmonth").value;
      console.log("<<<<< birthmonth", x);
      break;
    case "birthyear":
      var x = document.getElementById("birthyear").value;
      console.log("<<<<< birthyear", x);
      break;

    default:
      break;
  }
  const data = { birthday, birthmonth, birthyear }; // Dữ liệu cần gửi
  fetch("CRUD.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(data),
  })
    .then((response) => response.text())
    .then((responseData) => {
      console.log("Phản hồi từ PHP:", responseData);
    })
    .catch((error) => console.error("Lỗi:", error));
}
