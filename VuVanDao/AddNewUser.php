<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
        <link rel="stylesheet" href="style.css" />
</head>
 <body>
        <form action="./Service/AddUser.php" method="post">
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
                    name="Ho"                   
                  />
                  <input
                    type="text"
                    placeholder="tên"
                    class="ten"
                    name="Ten"                  
                  />
                </div>
                <label for="phone-email">
                  <input
                    class="phone-email"
                    type="text"
                    placeholder="emaii"
                    name="Email"         
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
                  <input
                    type="text"
                    class="password"
                    placeholder="Mã nhân viên"
                    name="NoiSong"
                  />
                </div>
                <div>
                  <input
                    type="text"
                    class="password"
                    placeholder="Nơi sống"
                    name="MaNhanVien"
                  />
                </div>
                <div>
                  ngày sinh
                  <div class="birth">
                    <div>
                      <label for="">
                        <select name="birth-day" id="birthday" onchange="myFunction('birthday')">
                        <?php
                            for($i=1;$i<=31;$i++){
                             ?>
                             <option value=<?php echo $i?>><?php echo $i?></option>
                        <?php
                            } 
                             ?>
                        </select>
                      </label>
                    </div>
                    <div>
                      <label for="">
                        <select name="birth-month" id="birthmonth" onchange="myFunction('birthmonth')">
                          <?php
                            for($i=1;$i<=12;$i++){
                             ?>
                             <option value=<?php echo $i?>><?php echo $i?></option>
                        <?php
                            } 
                             ?>
                        </select>
                      </label>
                    </div>
                    <div>
                      <label for="">
                        <select name="birth-year" id="birthyear" onchange="myFunction('birthyear')">
                          <?php
                            for($i=2000;$i<=2024;$i++){
                             ?>
                             <option value=<?php echo $i?>><?php echo $i?></option>
                        <?php
                            } 
                             ?>
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
          <script src="function.js"></script>
      </body>
</html>