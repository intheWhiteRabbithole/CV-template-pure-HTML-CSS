<ul class="timeline">
    <li class="enbas" data-year="2008" data-text=""></li>
    <li class="enbas" data-year="2013" data-text=""></li>
    <li data-year="2017" data-text=""></li>
    <li data-year="2019" data-text=""></li>
    <li class="enbas" data-year="2022" data-text=""></li>
</ul>

.timeline {
width:800px;
height: 20px;
list-style: none;
text-align: justify;
margin: 200px 50px 80px 600px;
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,0)), color-stop(45%, rgba(255,255,255,0)), color-stop(51%, rgba(191,128,11,1)), color-stop(57%, rgba(255,255,255,0)), color-stop(100%, rgba(255,255,255,0)));
background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 45%, rgba(191,128,11,1) 51%, rgba(255,255,255,0) 57%, rgba(255,255,255,0) 100%);
}
.timeline:after {
display: inline-block;
content: "";
width: 100%;
}
.timeline li {
display: inline-block;
width: 20px;
height: 20px;
background: #F2BB13;
text-align: center;
line-height: 1.2;
position: relative;
bottom: 10px;
border-radius: 50%;
}
.timeline li:before {
display: inline-block;
content: attr(data-year);
font-size: 26px;
position: absolute;
left: 50%;
transform: translateX(-50%);
}
.timeline li:nth-child(odd):before {
top: -40px;
}
.timeline li:nth-child(even):before {
bottom: -40px;
}
.timeline li:after {
display: inline-block;
content: attr(data-text);
font-size: 16px;
position: absolute;
left: 50%;
transform: translateX(-50%);
}
timeline li:nth-child(odd):after {
bottom: 0;
margin-bottom: -10px;
transform: translate(-50%, 100%);
}
.timeline li:nth-child(even):after {
top: 0;
margin-top: -10px;
transform: translate(-50%, -100%);
}
