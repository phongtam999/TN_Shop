@include('sweetalert::alert')
@if (session('success'))
    <script>
        swal({
            title: "Đăng nhập thành công!",
            icon: "success",
        });
    </script>
@endif


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
 section .img-bg {
    position: relative;
    width: 30%;
    height: auto;
    margin: 0 auto; /* căn giữa theo chiều ngang */
    padding: 50px; /* tạo khoảng cách xung quanh ảnh */
    display: flex;
    justify-content: center;
    align-items: center;
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
 .success-message {
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    margin-bottom: 10px;
}


 </style>
 <section>
     <!--Bắt Đầu Phần Hình Ảnh-->
     <div class="img-bg">
        <img src="https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/346297540_1331351057444308_70201087808299246_n.jpg?stp=cp6_dst-jpg&_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_ohc=tul6CmrV9XcAX8h-bjW&_nc_ht=scontent.fdad3-4.fna&oh=00_AfBvPVr_z2khzogO-32GFSNsj-8Kb13dK84FPo6CkPHepg&oe=64601C9C" style="width: 173%; height: 100%; object-fit: cover; object-position: center;">


     </div>
    
     <!--Kết Thúc Phần Hình Ảnh-->
     <!--Bắt Đầu Phần Nội Dung-->
     <div class="noi-dung">
        <style>
            .noi-dung{
                background-color:white;
            }
        </style>
         <div class="form">
             <h2 style="color:red">Trang Đăng Nhập</h2>
             <form action="{{ route('checkLogin') }}" method="POST" >
                @csrf
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        @if(session('success'))
                            Swal.fire({
                                title: "Đăng nhập thành công!",
                                icon: "success",
                                showConfirmButton: false,
                                timer: 2000 // Thời gian hiển thị thông báo (2 giây)
                            });
                        @endif
                    });
                </script>
                         <div class="input-form">
                     <span style="color:blue">Email</span>
                     <input type="text" name="email">
                     @if ($errors->any())
                     <p style="color:red">{{ $errors->first('email') }}</p>
                 @endif
                 </div>
                 <div class="input-form">
                     <span style="color:blue">Mật khẩu</span>
                     <input type="password" name="password">
                     @if ($errors->any())
                     <p style="color:red">{{ $errors->first('password') }}</p>
                 @endif
                 </div>
                 <div class="nho-dang-nhap">
                     <!-- <label><input type="checkbox" name=""> Nhớ Đăng Nhập</label> -->
                     <a href="{{route('forgot_password')}}">Quên Mật Khẩu</a>
                 </div>
                 <div class="input-form">
                     <input type="submit" value="Đăng Nhập">
                 </div>
             </form>
         </div>
     </div>
     <!--Kết Thúc Phần Nội Dung-->
     
    
 </section>