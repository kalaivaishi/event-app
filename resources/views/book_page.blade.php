<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Slot</title> 
    <!-- Fontawesome CSS --> 
	<link rel="stylesheet" href="{{'assets/plugins/fontawesome/css/fontawesome.min.css'}}">
	<link rel="stylesheet" href="{{'assets/plugins/fontawesome/css/all.min.css'}}">
    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{'assets/css/feather.css'}}">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{'assets/css/bootstrap.min.css'}}">
     <!-- Datetable CSS-->
    <link rel="stylesheet" href="{{'assets/css/dataTables.bootstrap4.min.css'}}">
       <!-- Main CSS -->
       <link rel="stylesheet" href="{{'assets/css/style.css'}}">
    <style>
body {
  font-size: 16px;
  background-color: #68A7AD;
}
.theatre {
  margin: 20px auto;
  width: 100%;
  max-width: 950px;
  border-radius: 5px;
  background-color: #fff;
  padding: 20px 10px;
  box-shadow: 0px 0px 17px -4px #000;
}
.screen-side {
  text-align: center;
}
.screen-side .screen {
  height: 25px;
  margin: 0 20px;
  border-radius: 50%;
  box-shadow: 0px -3px 0px 1px #ccc;
  color: #ccc;
}
.screen-side .screen1 {
  height: 25px;
  margin: 0 20px;
  border-radius: -50%;
  box-shadow: 0px -3px 0px 1px #ccc;
  color: #ccc;
}
.screen-side .select-text {
  color: #969696;
}
.exit {
  position: relative;
  height: 50px;
}
.exit:before{
  content: "Exit";
  font-size: 14px;
  line-height: 18px;
  padding: 0px 5px;
  font-family: "Arial Narrow", Arial, sans-serif;
  display: block;
  position: absolute;
  background: rgb(229, 27, 27);
  color: white;
  top: 50%;
  transform: translate(0, -50%);
}
.exit:after {
  content: "Entry";
  font-size: 14px;
  line-height: 18px;
  padding: 0px 5px;
  font-family: "Arial Narrow", Arial, sans-serif;
  display: block;
  position: absolute;
  background: green;
  color: white;
  top: 50%;
  transform: translate(0, -50%);
}
.exit:before {
  left: 0;
}
.exit:after {
  right: 0;
}
/* .circle {
  background: #BA8C63;
  border: 0.1875em solid #0F1C3F;
  border-radius: 50%;
  height: 35px;
  width: 30px;
} */
.circle {
  display: inline-block;
    background-color: #966F33;
    /* margin: 10px; */
    border-radius: 50%;
}

.circle-inner {
  color: white;
  display: table-cell;
  vertical-align: middle; 
  text-align: center;
  text-decoration: none;
  height: 35px;
  width: 30px;  
  /* font-size: 30px; */
}
.seat {
    display: block;
    margin: 5px;
    background: silver;
    width: 25px;
    height: 25px;
}

.seat-select {
    display: none;
}

.seat-select:checked+.seat {
    background: #F44336;
}
/* h2 hr design */

h2.double:before { 
    /* this is just to undo the :before styling from above */
    border-top: none; 
}

h2.double:after {
    border-bottom: 1px solid blue;
    -webkit-box-shadow: 0 1px 0 0 red;
    -moz-box-shadow: 0 1px 0 0 red;
    box-shadow: 0 1px 0 0 red;
    content: "";
    margin: 0 auto; /* this centers the line to the full width specified */
    position: absolute;
    top: 45%; left: 0; right: 0;
    width: 95%;
    z-index: -1;
}
h2 {
    font: 33px sans-serif;
    margin-top: 30px;
    position: relative;
    text-align: center;
    text-transform: uppercase;
    z-index: 1;
}
h2 span { 
    /* to hide the lines from behind the text, you have to set the background color the same as the container */ 
    background: #fff; 
    padding: 0 15px; 
}
h2:before {
    border-top: 2px solid #dfdfdf;
    content:"";
    margin: 0 auto; /* this centers the line to the full width specified */
    position: absolute; /* positioning must be absolute here, and relative positioning must be applied to the parent */
    top: 15px; left: 0; right: 0; bottom: 0;
    width: 95%;
    z-index: -1;
}
/* h2 hr design */
/* Floating Button */
/* .float-container {
    position: fixed;
    top: 33%;
    right: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    flex-direction: column;
    width: auto;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    -webkit-box-align: end;
    -ms-flex-align: end;
    align-items: flex-end;
}

.float-container a {
    z-index: 99;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 200px;
    height: 30px;
    margin-right: -20px;
    margin-bottom: 10px;
    padding: 10px 20px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    text-decoration: none;
    color: white;
    border-color: #46b8da;
    border-radius: 5px 0 0 5px;
    background-color: #eb690b;
    -webkit-box-shadow: 0 2px 4px #7d7d7d;
    box-shadow: 0 2px 4px #7d7d7d;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    font-family: sans-serif;
}

.float-container a:hover {
    margin-right: 0;
    background-color: #c45100;
    -webkit-box-shadow: 0 2px 4px #7d7d7d;
    box-shadow: 0 2px 4px #7d7d7d;
} */

/* Icon settings - remove if not needed*/
/* .float-container .icon:before {
    font-family: "Font Awesome 5 Free";
    margin-right: 25px;
    -webkit-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
}

.icon.one:before {
    content: "\f073";
}

.icon.two:before {
    content: "\f086";
}

.icon.three:before {
    content: "\f1d8";
} */

/* Media queries */
/* @media screen and (max-width:440px)
{
	.float-container .icon:last-child {
		display: none;
	}
    .float-container
    {
        position: fixed;
        top: auto;
        bottom: 0;

        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
            -ms-flex-direction: row;
                flex-direction: row;

        width: 100%;

        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: auto;
        -webkit-box-align: auto;
        -ms-flex-align: auto;
        align-items: auto;
    }
		.float-container a.icon
    {
        right: 0;
        bottom: 0;

        width: 100%;
        margin-right: 0;
        margin-bottom: 0;
        padding: 5px;

        border-radius: 0;
        -webkit-box-shadow: 0 0 0 #7d7d7d;
                box-shadow: 0 0 0 #7d7d7d;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
		border-left: 1px solid darkorange;
		border-right: 1px solid darkorange;
    }
} */
/* Floating Button */

    </style>
</head>
<body>      
      
<div class="theatre">
   
    <div class="screen-side">
      <div class="screen1" style="background-color: rgb(203, 79, 79);color: white;"><h4>Stage</h4></div>
      <div class="screen"></div>
      <h3 class="select-text">Please select a seat </h3>
    </div>
    
    <div class="exit exit--front">
    </div>
    <div class="container" style="padding-left: 120px;">
    <!-- <a href="fill_form.html"><button type="submit" class="btn btn-info">Book Now</button></a>   -->
    
    </div>
    <h2 class="double"><span>Vip</span></h2>

    <section id="seats">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <div class="card">
      <table>
        <thead>
            <tr>
            <th></th>
            <th> <input id="seat-1" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="1" name="seat[]" />
                <label for="seat-1" class="seat">A1</label></th>
             <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><input id="seat-2" class="seat-select" onchange="window.location.href='{{url('fill_form')}}'" type="checkbox" value="2" name="seat[]" />
                <label for="seat-2" class="seat">A4</label></td>
            <td><div class="circle">
                <p class="circle-inner">T1</p>
              </div></td>
            <!-- <td><img src="./assets/img/table/table1.png" style="width: 80px;height:50px"></td> -->
            <td> <input id="seat-3" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="3" name="seat[]" />
                <label for="seat-3" class="seat">A2</label></td>
            </tr>
            <tr>
                <td></td>
                <td><input id="seat-4" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="4" name="seat[]" />
                    <label for="seat-4" class="seat">A3</label></td>
                <td></td>
            </tr>
        </tbody>
      </table>
      </div>
      </div>
      <div class="col-sm-2">
        <div class="card">      
      <table>
        <thead>
            <tr>
            <th></th>
            <th> <input id="seat-5" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="5" name="seat[]" checked/>
                <label for="seat-5" class="seat">A1</label></th>
             <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><input id="seat-6" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="6" name="seat[]" checked/>
                <label for="seat-6" class="seat">A4</label></td>
            <td><div class="circle">
                <p class="circle-inner">T2</p>
              </div></td>
            <!-- <td><img src="./assets/img/table/table1.png" style="width: 80px;height:50px"></td> -->
            <td> <input id="seat-7" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="7" name="seat[]" checked/>
                <label for="seat-7" class="seat">A2</label></td>
            </tr>
            <tr>
                <td></td>
                <td><input id="seat-8" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="8" name="seat[]" checked/>
                    <label for="seat-8" class="seat">A3</label></td>
                <td></td>
            </tr>
        </tbody>
      </table>
      </div>
      </div>
      <div class="col-sm-2">
        <div class="card">      
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th> <input id="seat-9" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="9" name="seat[]" />
                        <label for="seat-9" class="seat">A1</label></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input id="seat-10" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="10" name="seat[]" />
                            <label for="seat-10" class="seat">A4</label></td>
                        <td><div class="circle">
                        <p class="circle-inner">T3</p>
                        </div></td>
                        <td> <input id="seat-11" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="11" name="seat[]" />
                        <label for="seat-11" class="seat">A2</label></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="seat-12" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="12" name="seat[]" />
                        <label for="seat-12" class="seat">A3</label></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card">      
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th> <input id="seat-13" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="13" name="seat[]" />
                        <label for="seat-13" class="seat">A1</label></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input id="seat-14" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="14" name="seat[]" />
                            <label for="seat-14" class="seat">A4</label></td>
                        <td><div class="circle">
                        <p class="circle-inner">T4</p>
                        </div></td>
                        <td> <input id="seat-15" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="15" name="seat[]" />
                        <label for="seat-15" class="seat">A2</label></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="seat-16" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="16" name="seat[]" />
                        <label for="seat-16" class="seat">A3</label></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <hr>
    <div class="exit exit--front">

      </section>

      <!-- 2nd block -->
      <h2 class="double"><span>Platinum</span></h2>

    <section id="seats">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <div class="card">
      <table>
        <thead>
            <tr>
            <th></th>
            <th> <input id="seat-17" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="17" name="seat[]" />
                <label for="seat-17" class="seat">A1</label></th>
             <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><input id="seat-18" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="18" name="seat[]" />
                <label for="seat-18" class="seat">A4</label></td>
            <td><div class="circle">
                <p class="circle-inner">T5</p>
              </div></td>
            <!-- <td><img src="./assets/img/table/table1.png" style="width: 80px;height:50px"></td> -->
            <td> <input id="seat-19" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="19" name="seat[]" />
                <label for="seat-19" class="seat">A2</label></td>
            </tr>
            <tr>
                <td></td>
                <td><input id="seat-20" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="20" name="seat[]" />
                    <label for="seat-20" class="seat">A3</label></td>
                <td></td>
            </tr>
        </tbody>
      </table>
      </div>
      </div>
      <div class="col-sm-2">
        <div class="card">      
      <table>
        <thead>
            <tr>
            <th></th>
            <th> <input id="seat-21" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="21" name="seat[]" />
                <label for="seat-21" class="seat">A1</label></th>
             <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><input id="seat-22" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="22" name="seat[]" />
                <label for="seat-22" class="seat">A4</label></td>
            <td><div class="circle">
                <p class="circle-inner">T6</p>
              </div></td>
            <!-- <td><img src="./assets/img/table/table1.png" style="width: 80px;height:50px"></td> -->
            <td> <input id="seat-23" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="23" name="seat[]" />
                <label for="seat-23" class="seat">A2</label></td>
            </tr>
            <tr>
                <td></td>
                <td><input id="seat-24" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="24" name="seat[]" />
                    <label for="seat-24" class="seat">A3</label></td>
                <td></td>
            </tr>
        </tbody>
      </table>
      </div>
      </div>
      <div class="col-sm-2">
        <div class="card">      
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th> <input id="seat-25" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="25" name="seat[]" checked/>
                        <label for="seat-25" class="seat">A1</label></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input id="seat-26" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="26" name="seat[]" checked/>
                            <label for="seat-26" class="seat">A4</label></td>
                        <td><div class="circle">
                        <p class="circle-inner">T7</p>
                        </div></td>
                        <td> <input id="seat-27" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="27" name="seat[]" checked/>
                        <label for="seat-27" class="seat">A2</label></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="seat-28" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="29" name="seat[]" checked/>
                        <label for="seat-28" class="seat">A3</label></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card">      
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th> <input id="seat-29" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="29" name="seat[]" checked/>
                        <label for="seat-29" class="seat">A1</label></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input id="seat-30" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="30" name="seat[]" checked/>
                            <label for="seat-30" class="seat">A4</label></td>
                        <td><div class="circle">
                        <p class="circle-inner">T8</p>
                        </div></td>
                        <td> <input id="seat-35" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="35" name="seat[]" checked/>
                        <label for="seat-35" class="seat">A2</label></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="seat-36" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="36" name="seat[]" checked/>
                        <label for="seat-36" class="seat">A3</label></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card">      
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th> <input id="seat-37" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="37" name="seat[]" />
                        <label for="seat-37" class="seat">A1</label></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input id="seat-38" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="38" name="seat[]" />
                            <label for="seat-38" class="seat">A4</label></td>
                        <td><div class="circle">
                        <p class="circle-inner">T9</p>
                        </div></td>
                        <td> <input id="seat-39" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="39" name="seat[]" />
                        <label for="seat-39" class="seat">A2</label></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="seat-40" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="40" name="seat[]" />
                        <label for="seat-40" class="seat">A3</label></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card">      
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th> <input id="seat-41" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="41" name="seat[]" />
                        <label for="seat-41" class="seat">A1</label></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input id="seat-42" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="42" name="seat[]" />
                            <label for="seat-42" class="seat">A4</label></td>
                        <td><div class="circle">
                        <p class="circle-inner">T10</p>
                        </div></td>
                        <td> <input id="seat-43" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="43" name="seat[]" />
                        <label for="seat-43" class="seat">A2</label></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="seat-44" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="44" name="seat[]" />
                        <label for="seat-44" class="seat">A3</label></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <hr>
    <div class="exit exit--front">

      </section>
      <!-- 2Nd Block Ends -->
      <!-- 2nd block -->
      <h2 class="double"><span>Gold</span></h2>

    <section id="seats">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <div class="card">
      <table>
        <thead>
            <tr>
            <th></th>
            <th> <input id="seat-45" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="45" name="seat[]" />
                <label for="seat-45" class="seat">A1</label></th>
             <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><input id="seat-46" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="46" name="seat[]" />
                <label for="seat-46" class="seat">A4</label></td>
            <td><div class="circle">
                <p class="circle-inner">T11</p>
              </div></td>
            <!-- <td><img src="./assets/img/table/table1.png" style="width: 80px;height:50px"></td> -->
            <td> <input id="seat-47" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="47" name="seat[]" />
                <label for="seat-47" class="seat">A2</label></td>
            </tr>
            <tr>
                <td></td>
                <td><input id="seat-48" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="48" name="seat[]" />
                    <label for="seat-48" class="seat">A3</label></td>
                <td></td>
            </tr>
        </tbody>
      </table>
      </div>
      </div>
      <div class="col-sm-2">
        <div class="card">      
      <table>
        <thead>
            <tr>
            <th></th>
            <th> <input id="seat-49" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="49" name="seat[]" />
                <label for="seat-49" class="seat">A1</label></th>
             <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><input id="seat-50" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="50" name="seat[]" />
                <label for="seat-50" class="seat">A4</label></td>
            <td><div class="circle">
                <p class="circle-inner">T12</p>
              </div></td>
            <!-- <td><img src="./assets/img/table/table1.png" style="width: 80px;height:50px"></td> -->
            <td> <input id="seat-51" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="51" name="seat[]" />
                <label for="seat-51" class="seat">A2</label></td>
            </tr>
            <tr>
                <td></td>
                <td><input id="seat-52" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="52" name="seat[]" />
                    <label for="seat-52" class="seat">A3</label></td>
                <td></td>
            </tr>
        </tbody>
      </table>
      </div>
      </div>
      <div class="col-sm-2">
        <div class="card">      
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th> <input id="seat-53" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="53" name="seat[]" />
                        <label for="seat-53" class="seat">A1</label></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input id="seat-54" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="54" name="seat[]" />
                            <label for="seat-54" class="seat">A4</label></td>
                        <td><div class="circle">
                        <p class="circle-inner">T13</p>
                        </div></td>
                        <td> <input id="seat-55" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="55" name="seat[]" />
                        <label for="seat-55" class="seat">A2</label></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="seat-56" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="56" name="seat[]" />
                        <label for="seat-56" class="seat">A3</label></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card">      
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th> <input id="seat-57" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="57" name="seat[]" />
                        <label for="seat-57" class="seat">A1</label></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input id="seat-58" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="58" name="seat[]" />
                            <label for="seat-58" class="seat">A4</label></td>
                        <td><div class="circle">
                        <p class="circle-inner">T14</p>
                        </div></td>
                        <td> <input id="seat-59" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="59" name="seat[]" />
                        <label for="seat-59" class="seat">A2</label></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="seat-60" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="60" name="seat[]" />
                        <label for="seat-60" class="seat">A3</label></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card">      
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th> <input id="seat-61" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="61" name="seat[]" />
                        <label for="seat-61" class="seat">A1</label></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input id="seat-62" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="62" name="seat[]" />
                            <label for="seat-62" class="seat">A4</label></td>
                        <td><div class="circle">
                        <p class="circle-inner">T15</p>
                        </div></td>
                        <td> <input id="seat-63" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="63" name="seat[]" />
                        <label for="seat-63" class="seat">A2</label></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="seat-64" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="64" name="seat[]" />
                        <label for="seat-64" class="seat">A3</label></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card">      
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th><input id="seat-65" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="65" name="seat[]" />
                        <label for="seat-65" class="seat">A1</label></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input id="seat-66" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="66" name="seat[]" />
                            <label for="seat-66" class="seat">A4</label></td>
                        <td><div class="circle">
                        <p class="circle-inner">T16</p>
                        </div></td>
                        <td> <input id="seat-67" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="67" name="seat[]" />
                        <label for="seat-67" class="seat">A2</label></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="seat-68" class="seat-select" type="checkbox" onchange="window.location.href='{{url('fill_form')}}'" value="68" name="seat[]" />
                        <label for="seat-68" class="seat">A3</label></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <hr>
      </section>
      <!-- 2Nd Block Ends -->
    <div class="exit exit--back">

    </div>
    <a href="{{url('login')}}"><button type="button" class="btn btn-primary" style="float: right;">Logout</button></a>
<br>
  </div>

  <script type="text/javascript">
    if(window.history.replaceState){
        window.history.replaceState(null,null, window.location.href);
    }
</script>
   <!-- jQuery -->
   <script src="{{'assets/js/jquery-3.6.0.min.js'}}"></script>

   <!-- Bootstrap Core JS -->
   <script src="{{'assets/js/bootstrap.bundle.min.js'}}"></script>
</body>
</html>