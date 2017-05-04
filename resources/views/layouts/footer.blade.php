<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<style>
ul {
    overflow: auto;
}
 
ul li {
    list-style-type: none;
    float: left;
}
 
ul li a i {
    background: #205D7A;
    color: #fff;
    width: 40px;
    height: 40px;
    border-radius: 20px;
    font-size: 25px;
    text-align: center;
    margin-right: 10px; 
    padding-top: 15%; 
    transition: all 0.2s ease-in-out;
}
.fa-facebook {
    background:#3b5998
} 
.fa-linkedin {
    background:#007bb6
}
.fa-twitter {
    background:#00aced
}
.google-plus {
    background:#dd4b39
}
ul li a i:hover {
    opacity: .7;
}
</style>

<footer>
    <div class="container" style="background-color: #d1d1e0">
        <div class="row">
            <div class="col-sm-4 col-md-12" >
                <div class="col-sm-3">
                    <h3>Contacts Us:</h3>
                    <address>
                        P.O.BOX 2787 <br>
                        Dodoma <br>
                        Tanzania
                    </address>
                </div>
                
                <div class="col-sm-4">
                    <h3>You can check also;</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/')  }}">HOME</a></li>
                        <li><a href="{{ url('about')  }}">ABOUT US</a></li>
                        <li><a href="#">TERMS AND CONDITIONS</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="form-group">
                    <input type="email" placeholder="E-mail Here">
                    <button class="btn btn-primary">SUBSCRIBE</button>
                </div>
            </div>    
        </div>

        <div class="row">
            <div class="col-sm-4">
                    <h3>Follow us on:</h3>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
                    </ul>
                </div>
        </div>
         <div class="row">
            <div class="col-md-10">
                <p class="text-center">
                    &copy 2017 5bfs | All Rights Reserved
                </p>
            </div>    
        </div>
    </div>
</footer>