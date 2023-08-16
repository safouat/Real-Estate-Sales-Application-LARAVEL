<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Satisfy&family=Shadows+Into+Light&family=Work+Sans:ital,wght@1,200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f770f9bca0.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: 'Dancing Script', cursive;
    font-family: 'Satisfy', cursive;
font-family: 'Shadows Into Light', cursive;
font-family: 'Work Sans', sans-serif;
box-sizing: border-box;

}

body {
    background-color:#e8e8e8;

}
.kenburns-top {
	-webkit-animation: kenburns-top 5s ease-out both;
	        animation: kenburns-top 5s ease-out both;
   

}
.kenburns-top img{
    width: 100%;
    height: 90%;
    position:-ms-page;
}


header {
  
    width: 100%;
    height: 90px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color:#000;
    padding: 0 100px;

}

.hamburger {
    display: none;
}

.logo {
    font-family: 'Dancing Script', cursive;
    font-family: 'Satisfy', cursive;
    font-size:30px;
    color: #fbfbfb;
    padding:0.1px;
    -webkit-animation: text-focus-in 1s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
            animation: text-focus-in 1s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
    

}
/* ----------------------------------------------
 * Generated by Animista on 2023-1-28 14:50:50
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation text-focus-in
 * ----------------------------------------
 */
 @-webkit-keyframes logo {
    0% {
      -webkit-filter: blur(12px);
              filter: blur(12px);
      opacity: 0;
    }
    100% {
      -webkit-filter: blur(0px);
              filter: blur(0px);
      opacity: 1;
    }
  }
  @keyframes logo {
    0% {
      -webkit-filter: blur(12px);
              filter: blur(12px);
      opacity: 0;
    }
    100% {
      -webkit-filter: blur(0px);
              filter: blur(0px);
      opacity: 1;
    }
  }
  

nav ul li {

    display: inline-block;
    padding: 0px 18px;
}

nav ul li a {
    color: #fefefe;
    text-decoration: none;
    font-size: 20px;
    display: inline-block;
    border-radius: 23px;
    padding: 10 25px;
    margin: 0 3px;


}
nav ul li a:hover{
    color: black;
    background: #fefefe;
    padding: 13px;
    transition:0.6s;
}
nav ul li a.active{
    color: black;
    background: #fefefe;
    padding: 10px;

}
@media only screen and (max-width:1320px){
    header {
        padding:0 50px;
    }
}
@media only screen and(max-width:1100px){
    header {
        padding:0 30px;

    }
}
@media only screen and (max-width:900px){
    .hamburger{
        display:block;
        cursor:pointer;

    }
    .humberger .line{
        width:30px;
        height:3px;
        background: #fefefe;
        margin:6px 0;
    }
}
OK li a{
    margin:9px;
    font-size: 24px;
    
}
.fa-user{
    color:white ;
    margin-left:10px;
    font-size: 30px;
}
.ok li a:hover{
    
    font-size: 26px;
}
.fa-heart{
    color:#e91e63;
    margin-right:10px;
    font-size: 30px;
}
.fa-magnifying-glass{
    color:white;
}
.card{
    background-color: aliceblue;
    width:21%;
    height:90px;
    margin-left:19px;
    margin-top: 10px;
    border-radius: 20px;
    box-shadow:  2px 2px  inset  black;
    margin-right:40px;
}
.info{
    padding: 10px;
}
.name{
    padding-left: 0px;
   
}
.nbr{
    padding-left:100px;
    margin-top:11px;
    font-family: 'Source Sans Pro', sans-serif;

}
.card1{
    display:flex;
}
.charts-container {
    display: flex;
}
.chart-container {
    flex: 1;
    margin: 20px;
    max-width: 600px;
    background-color:aliceblue;
    border-radius: 20px;
   

}
.chart-container p{
    margin-left:30%;
}
</style>
    <title>Charts</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <style>
    .loader-container{
        width:100%;
        height:100vh;
        background-color: #000000;
        position:fixed;
        
      }
      .loader{
        margin-left:47%;
        margin-top:18%;
        width:100px;
        height:100px;
        border:5px solid;
        color:#ffffff;
        border-radius:50%;
        border-top-color:transparent;
        animation:loader 1.2s linear infinite;
      
      
      }
      @keyframes loader{
          to{
            transform:rotate(360deg);
          }
      
        }
          </style>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      
          <body>
            <div class="loader-container">
              <div class="loader"></div>
            </div>
            <script>
              $(window).on("load",function(){
                $(".loader-container").fadeOut(1000);
      
              });
              </script>
              <header>
        <div class="logo">Immobiler Manager</div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-navbar">
            <ul>
            <li>
                <a href="{{ route('annonces.qwerty') }}" >Dashboard</a>
            </li>
            <li>
                <a href="#" class="active">Users</a>
            </li>
           
            <li>
                <a href="{{ route('annonces.index') }}">Posts</a>
            </li>
            
            
        
            </li>
            </ul>
        </nav>
       
        <div class="OK">

            
        </div>
    </header>
    <div class="container mt-3">        
        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Admin</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
        @foreach($resultat as $r)
            <tr>
              <td>{{$r['name']}}</td>
              <td>{{$r['email']}}</td>
              <td>{{$r['admin']}}</td>
              <td><img src="/SerieLaravel/public/photos/{{ $r['image'] }}" style="width:10%; height:10%;display:center;border-radius:50% "></td>
              <td><a href="#"><i class="fa-solid fa-trash"></i></td>
            </tr>
        @endforeach
            
          </tbody>
        </table>
        <div class="pagination">
            {{ $resultat->links() }}
      </div>