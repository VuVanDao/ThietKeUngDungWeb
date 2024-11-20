<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
        <link rel="stylesheet" href="style.css" />
        
</head>
 <body>
        <form action="index2.php" method="post">
          <div class="container">
            <div class="content1">
              <h1>Đăng kí</h1>
              <p>Nhanh chóng và !dễ dàng</p>
            </div>
            <div class="content2">
              <form action="" id="form">
                <div class="text-1" for="">
                  <input
                    type="text"
                    placeholder="họ"
                    class="ho"
                    name="first-name"
                  />
                  <input
                    type="text"
                    placeholder="tên"
                    class="ten"
                    name="last-name"
                  />
                </div>

                <label for="phone-email">
                  <input
                    class="phone-email"
                    type="text"
                    placeholder="số di động hoặc emaii"
                    name="phone-number"
                  />
                </label>

                <div>
                  <input
                    type="password"
                    class="password"
                    placeholder="password"
                    name="password"
                  />
                </div>

                <div>
                  ngày sinh
                  <div class="birth">
                    <div>
                      <label for="">
                        <select name="birth-day" id="birthday">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option selected value="11">11</option>
                        </select>
                      </label>
                    </div>
                    <div>
                      <label for="">
                        <select name="birth-month" id="birthmonth">
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option selected value="8">8</option>
                        </select>
                      </label>
                    </div>
                    <div>
                      <label for="">
                        <select name="birth-year" id="birthyear">
                          <option value="2024">2024</option>
                          <option value="2023">2023</option>
                          <option value="2022">2022</option>
                          <option selected value="2004">2004</option>
                        </select>
                      </label>
                    </div>
                  </div>
                </div>

                <div>
                  Giới tính
                  <div class="Gender">
                    <div>
                      <label for="male">Nam</label>
                      <input
                        type="radio"
                        id="male"
                        name="gender"
                        value="Nam"
                        class="check-gender"
                      />
                    </div>
                    <div>
                      <label for="female">Nữ</label>
                      <input
                        type="radio"
                        id="female"
                        name="gender"
                        value="Nữ"
                        class="check-gender"
                      />
                    </div>
                    <div>
                      <label for="other">Tuỳ chọn</label>
                      <input
                        type="radio"
                        id="other"
                        name="gender"
                        value="other"
                        class="check-gender"
                      />
                    </div>
                  </div>
                </div>
                <div class="btn"><button>Đăng kí</button></div>
              </form>
            </div>
          </div>
        </form>
      </body>
</html>