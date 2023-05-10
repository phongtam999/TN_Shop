<style>
    *{
     margin:0;
     padding: 0;
     box-sizing: border-box;
     font-family: 'Roboto', sans-serif;
 }

 section{
     position: relative;
     width: 100%;
     height: 100vh;
     display: flex;
 }

 section .img-bg{
     position: relative;
     width: 50%;
     height: 100%;
 }



 section .img-bg img{
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     object-fit: cover;
 }
 section .noi-dung{
     display: flex;
     justify-content: center;
     align-items: center;
     width: 50%;
     height: 100%;
 }

 section .noi-dung .form{
     width: 50%;
 }


 section .noi-dung .form h2{
     color: #607d8b;
     font-weight: 500;
     font-size: 1.5em;
     text-transform: uppercase;
     margin-bottom: 20px;
     border-bottom: 4px solid #6694e9;
     display: inline-block;
     letter-spacing: 1px;
 }
 section .noi-dung .form .input-form{
      margin-bottom: 20px;
  }
 section .noi-dung .form .input-form span{
      font-size: 16px;
      margin-bottom: 5px;
      display: inline-block;
      color: #607db8;
      letter-spacing: 1px;
       }
 section .noi-dung .form .input-form input{
      width: 100%;
      padding: 10px 20px;
      outline: none;
      border: 1px solid #607d8b;
      font-size: 16px;
      letter-spacing: 1px;
      color: #607d8b;
      background: wheat;
      border-radius: 30px;
      }
  section .noi-dung .form .input-form input[type="submit"]{
      background:red;
      color: #fff;
      outline: none;
      border: none;
      font-weight: 500;
      cursor: pointer;
      box-shadow: 0 1px 1px rgba(0,0,0,0.12),
                 0 2px 2px rgba(0,0,0,0.12),
                 0 4px 4px rgba(0,0,0,0.12),
                0 8px 8px rgba(0,0,0,0.12),
                0 16px 16px rgba(0,0,0,0.12);
  }
 section .noi-dung .form .input-form input[type="submit"]:hover{
      background: #6694e9;
  }
  section .noi-dung .form .nho-dang-nhap{
      margin-bottom: 10px;
      color: #607d8b;
      font-size: 14px;
  }
  section .noi-dung .form .input-form p{
      color: #607d8b;
  }
 section .noi-dung .form .input-form p a{
      color: #ffb3b3;
  }

 section .noi-dung .form h3{
      color: #607d8b;
      text-align: center;
      margin: 80px 0 10px;
      font-weight: 500;
  }
 section .noi-dung .form .icon-dang-nhap{
      display: flex;
      justify-content: center;
      align-items: center;
  }
 section .noi-dung .form .icon-dang-nhap li{
      list-style: none;
      cursor: pointer;
      width: 50px;
      height: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
  }
  section .noi-dung .form .icon-dang-nhap li:nth-child(1){
      color: #3b5999;
  }
  section .noi-dung .form .icon-dang-nhap li:nth-child(2){
      color: #dd4b39;
  }
  section .noi-dung .form .icon-dang-nhap li:nth-child(3){
      color: #55acee;
  }
  section .noi-dung .form .icon-dang-nhap li i{
      font-size: 24px;
  }

 @media (max-width: 768px){
     section .img-bg{
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
     }
     section .noi-dung{
         display: flex;
         justify-content: center;
         align-items: center;
         width: 100%;
         height: 100%;
         z-index: 1;
     }
     section .noi-dung .form{
         width: 100%;
         padding: 40px;
         background: rgba(255 255 255 / 0.9);
         margin: 50px;
     }
     section .noi-dung .form h3{
         color: #607d8b;
         text-align: center;
         margin: 30px 0 10px;
         font-weight: 500;
     }

     
 }

 </style>
 <section>
     <!--Bắt Đầu Phần Hình Ảnh-->
     <div class="img-bg">
         <img src="https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/331866838_3144003475891433_2442355929580334998_n.jpg?stp=cp6_dst-jpg&_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=py3evyLWZBgAX8cTq1-&_nc_ht=scontent.fdad3-4.fna&oh=00_AfB6LuxNpREB_rUIuSqrJcbOak64yJGb7sixEBEw7B4h8Q&oe=645E379D">
     </div>
    
     <!--Kết Thúc Phần Hình Ảnh-->
     <!--Bắt Đầu Phần Nội Dung-->
     <div class="noi-dung">
        <style>
            .noi-dung {
                background-color: white;
            }
        </style>
          <div class="form">
            <h2 style="color: red">Lấy Lại Mật Khẩu</h2>
            <form method="post" action="{{ route('post_forgot_password') }}">
                @csrf
                <div class="input-form">
                    <label for="email" style="color: blue">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-form">
                    <input type="submit" value="Gửi Mail">
                </div>
            </form>
        </div>
    </div>  
    <!-- Kết Thúc Phần Nội Dung -->
    
 </section>