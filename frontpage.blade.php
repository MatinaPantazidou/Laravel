@extends('layouts.frontpage')

@section('content')


<div class="container-fluid searchrow">
      
      <div class="row justify-content-center">
        <div class="container">
          <h2 class="align"><b>Nunk lobortis mattis aliquam<br/>faucibus purus</b></h2> 
         <div class="searchBox mt-5">
            <form>
                <div class="row mt-4">   
                 <div class="col-md-6 form-group">
                     <input type="text" class="form-control icon-input shadow" placeholder="Search for a boat near..">
                     <a href="#"><i class="check-icon" aria-hidden="true"><img src="imgs/map-marker.png" alt="" class="map"></i></a>
                  </div>
                  <div class="col-md-6 form-group">
                     <input type="text" class="form-control icon-input shadow" placeholder="Search for an activity or service">
                     <a href="#"><i class="check-icon" aria-hidden="true"><img src="imgs/water-solid.png" alt="" class="map"></i></a>
                  </div>
                </div>
             
                <div class="row mt-4"> 
                  <div class="col-md-4 form-group">
                     <input type="text" class="form-control icon-input shadow" placeholder="Check in">
                     <a href="#"><i class="check-icon" aria-hidden="true"><img src="imgs/calendar-alt-solid.png" alt="" class="map"></i></a>
                  </div>
                 <div class="col-md-4 form-group">
                     <input type="text" class="form-control icon-input shadow" placeholder="Check out">
                     <a href="#"><i class="check-icon" aria-hidden="true"><img src="imgs/calendar-alt-solid.png" alt="" class="map"></i></a>
                  </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <select class="form-control">
                      <option value="" selected disabled>Guests</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>> 3</option>
                    </select>
                  </div>
                </div>
                </div>
                 <div class="row mt-4">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                       <button type="button" class="btn btn-primary mb-3" onclick="location.href = '{{ url('search') }}'">SEARCH</button>
                    </div>
                </div> 
                </form>
              </div>
            </div>
          </div> 
      </div>    


<div class="container mt-5">
<div id="carouselExampleControls" class="carousel slide ml-0" data-interval="false" data-ride="carousel" data-pause="hover">
  <h3 class="row-title"><b>Best prices</b></h3> 
  <div class="carousel-inner">

    <div class="carousel-item active">
      <div class="row column">
            <div class="col-sm-4">
              <div class="card">
                <span class="index">-30%</span>
                <div class="rating ratecarousel">
                  <input type="radio" id="car5" name="rating1" value="5" /><label class = "full" for="car5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="car54half" name="rating1" value="4 and a half" /><label class="half" for="car54half" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="car4" name="rating1" value="4" /><label class = "full" for="car4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="car43half" name="rating1" value="3 and a half" /><label class="half" for="car43half" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="car3" name="rating1" value="3" /><label class = "full" for="car3" title="Meh - 3 stars"></label>
                  <input type="radio" id="car32half" name="rating1" value="2 and a half" /><label class="half" for="car32half" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="car2" name="rating1" value="2" /><label class = "full" for="car2" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="car21half" name="rating1" value="1 and a half" /><label class="half" for="car21half" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="car1" name="rating1" value="1" /><label class = "full" for="car1" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="car1half" name="rating1" value="half" /><label class="half" for="car1half" title="Sucks big time - 0.5 stars"></label>
              </div>
                <img src="imgs/mainBoatImage.jpg" class="d-block w-100 card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text">Dufour 500 <button type="button" class="btn btn-info">2016</button>
                  <br><span class="desc-boat">Yacht</span></p>
                  <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span><span class="country-col sub mt-3 flo">10th to 15th of June</span></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <span class="index">-30%</span>
                <div class="rating ratecarousel">
                  <input type="radio" id="caro5" name="rating2" value="5" /><label class = "full" for="caro5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="caro54half" name="rating2" value="4 and a half" /><label class="half" for="caro54half" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="caro4" name="rating2" value="4" /><label class = "full" for="caro4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="caro43half" name="rating2" value="3 and a half" /><label class="half" for="caro43half" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="caro3" name="rating2" value="3" /><label class = "full" for="caro3" title="Meh - 3 stars"></label>
                  <input type="radio" id="caro32half" name="rating2" value="2 and a half" /><label class="half" for="caro32half" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="caro2" name="rating2" value="2" /><label class = "full" for="caro2" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="caro21half" name="rating2" value="1 and a half" /><label class="half" for="caro21half" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="caro1" name="rating2" value="1" /><label class = "full" for="caro1" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="caro1half" name="rating2" value="half" /><label class="half" for="caro1half" title="Sucks big time - 0.5 stars"></label>
              </div>
                <img src="imgs/bobby.png" class="img-fluid card-img-top" alt="Responsive image">
                <div class="card-body">
                   <p class="card-text">Dufour 500 <button type="button" class="btn btn-info">2016</button>
                    <br><span class="desc-boat">Sailing Boat</span></p>
                  <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span><span class="country-col sub mt-3 flo">10th to 15th of June</span></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <span class="index">-30%</span>
                <div class="rating ratecarousel">
                  <input type="radio" id="carou5" name="rating3" value="5" /><label class = "full" for="carou5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="carou54half" name="rating3" value="4 and a half" /><label class="half" for="carou54half" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="carou4" name="rating3" value="4" /><label class = "full" for="carou4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="carou43half" name="rating3" value="3 and a half" /><label class="half" for="carou43half" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="carou3" name="rating3" value="3" /><label class = "full" for="carou3" title="Meh - 3 stars"></label>
                  <input type="radio" id="carou32half" name="rating3" value="2 and a half" /><label class="half" for="carou32half" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="carou2" name="rating3" value="2" /><label class = "full" for="carou2" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="carou21half" name="rating3" value="1 and a half" /><label class="half" for="carou21half" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="carou1" name="rating3" value="1" /><label class = "full" for="carou1" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="carou1half" name="rating3" value="half" /><label class="half" for="carou1half" title="Sucks big time - 0.5 stars"></label>
              </div>
                <img src="imgs/ivana.png" class="d-block w-100 card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Dufour 500 <button type="button" class="btn btn-info">2016</button>
                    <br><span class="desc-boat">Yacht</span></p>
                  <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span><span class="country-col sub mt-3 flo">10th to 15th of June</span></p>
                </div>
              </div>
            </div>
          </div>
    </div>

    <div class="carousel-item">
      <div class="row">
            <div class="col-sm-4">
              <div class="card">
                <span class="index">-30%</span>
                <div class="rating ratecarousel">
                  <input type="radio" id="carous5" name="rating4" value="5" /><label class = "full" for="carous5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="carous54half" name="rating4" value="4 and a half" /><label class="half" for="carous54half" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="carous4" name="rating4" value="4" /><label class = "full" for="carous4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="carous43half" name="rating4" value="3 and a half" /><label class="half" for="carous43half" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="carous3" name="rating4" value="3" /><label class = "full" for="carous3" title="Meh - 3 stars"></label>
                  <input type="radio" id="carous32half" name="rating4" value="2 and a half" /><label class="half" for="carous32half" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="carous2" name="rating4" value="2" /><label class = "full" for="carous2" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="carous21half" name="rating4" value="1 and a half" /><label class="half" for="carous21half" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="carous1" name="rating4" value="1" /><label class = "full" for="carous1" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="carous1half" name="rating4" value="half" /><label class="half" for="carous1half" title="Sucks big time - 0.5 stars"></label>
              </div>
                <img src="imgs/mainBoatImage.jpg" class="d-block w-100 card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text">Dufour 500 <button type="button" class="btn btn-info">2016</button>
                  <br><span class="desc-boat">Sailing Boat</span></p>
                  <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span><span class="country-col sub mt-3 flo">10th to 15th of June</span></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <span class="index">-30%</span>
                <div class="rating ratecarousel">
                  <input type="radio" id="carouse5" name="rating5" value="5" /><label class = "full" for="carouse5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="carouse54half" name="rating5" value="4 and a half" /><label class="half" for="carouse54half" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="carouse4" name="rating5" value="4" /><label class = "full" for="carouse4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="carouse43half" name="rating5" value="3 and a half" /><label class="half" for="carouse43half" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="carouse3" name="rating5" value="3" /><label class = "full" for="carouse3" title="Meh - 3 stars"></label>
                  <input type="radio" id="carouse32half" name="rating5" value="2 and a half" /><label class="half" for="carouse32half" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="carouse2" name="rating5" value="2" /><label class = "full" for="carouse2" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="carouse21half" name="rating5" value="1 and a half" /><label class="half" for="carouse21half" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="carouse1" name="rating5" value="1" /><label class = "full" for="carouse1" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="carouse1half" name="rating5" value="half" /><label class="half" for="carouse1half" title="Sucks big time - 0.5 stars"></label>
              </div>
                <img src="imgs/bobby.png" class="d-block w-100 card-img-top" alt="...">
                <div class="card-body">
                   <p class="card-text">Dufour 500 <button type="button" class="btn btn-info">2016</button>
                   <br><span class="desc-boat">Yacht</span></p>
                  <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span><span class="country-col sub mt-3 flo">10th to 15th of June</span></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <span class="index">-30%</span>
                <div class="rating ratecarousel">
                  <input type="radio" id="carousel5" name="rating6" value="5" /><label class = "full" for="carousel5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="carousel54half" name="rating6" value="4 and a half" /><label class="half" for="carousel54half" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="carousel4" name="rating6" value="4" /><label class = "full" for="carousel4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="carousel43half" name="rating6" value="3 and a half" /><label class="half" for="carousel43half" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="carousel3" name="rating6" value="3" /><label class = "full" for="carousel3" title="Meh - 3 stars"></label>
                  <input type="radio" id="carousel32half" name="rating6" value="2 and a half" /><label class="half" for="carousel32half" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="carousel2" name="rating6" value="2" /><label class = "full" for="carousel2" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="carousel21half" name="rating6" value="1 and a half" /><label class="half" for="carousel21half" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="carousel1" name="rating6" value="1" /><label class = "full" for="carousel1" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="carousel1half" name="rating6" value="half" /><label class="half" for="carousel1half" title="Sucks big time - 0.5 stars"></label>
              </div>
                <img src="imgs/ivana.png" class="d-block w-100 card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Dufour 500 <button type="button" class="btn btn-info">2016</button>
                    <br><span class="desc-boat">Sailing Boat</span></p>
                  <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span><span class="country-col sub mt-3 flo">10th to 15th of June</span></p>
                </div>
              </div>
            </div>
          </div>
    </div>

    
  </div>
  <a class="carousel-control-prev arrows" href="#carouselExampleControls" role="button" data-slide="prev">            
  <i class="fa fa-chevron-left fa-2x carousel-pointer ml-80"></i>
  <span class="sr-only">Previous</span></a> 
  <a class="carousel-control-next text-faded arrows" href="#carouselExampleControls" role="button" data-slide="next">
  <i class="fa fa-chevron-right fa-2x carousel-pointer m-80"></i>       
  <span class="sr-only">Next</span></a>
</div>
<button type="button" class="btn btn-large"><b>SEE ALL PROMOTIONS</b></button>
</div>
<br>

 <div class="container mt-5">
  <h3 class="row-title"><b>People are loving</b></h3> 
    <div class="row column">
      <div class="col-sm-4 col-md-6 col-lg-3 col-xs-12">
        <div class="card">
          <div class="rating">
              <input type="radio" id="l5" name="people1" value="5" /><label class = "full" for="l5" title="Awesome - 5 stars"></label>
              <input type="radio" id="l54half" name="people1" value="4 and a half" /><label class="half" for="l54half" title="Pretty good - 4.5 stars"></label>
              <input type="radio" id="l4" name="people1" value="4" /><label class = "full" for="l4" title="Pretty good - 4 stars"></label>
              <input type="radio" id="l43half" name="people1" value="3 and a half" /><label class="half" for="l43half" title="Meh - 3.5 stars"></label>
              <input type="radio" id="l3" name="people1" value="3" /><label class = "full" for="l3" title="Meh - 3 stars"></label>
              <input type="radio" id="l32half" name="people1" value="2 and a half" /><label class="half" for="l32half" title="Kinda bad - 2.5 stars"></label>
              <input type="radio" id="l2" name="people1" value="2" /><label class = "full" for="l2" title="Kinda bad - 2 stars"></label>
              <input type="radio" id="l21half" name="people1" value="1 and a half" /><label class="half" for="l21half" title="Meh - 1.5 stars"></label>
              <input type="radio" id="l1" name="people1" value="1" /><label class = "full" for="l1" title="Sucks big time - 1 star"></label>
              <input type="radio" id="l1half" name="people1" value="half" /><label class="half" for="l1half" title="Sucks big time - 0.5 stars"></label>
          </div>
          <img src="imgs/inspirationfeed.png" class="card-img-top" alt="...">
          <div class="card-body">
            
            <p class="card-text">Calet 2<button type="button" class="btn btn-info">2016</button>
              <br><span class="desc-boat">Yacht</span></p>
            <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span></p>
        </div>
        </div>
      </div>
    <div class="col-sm-4 col-md-6 col-lg-3 col-xs-12">
      <div class="card">
        <div class="rating">
              <input type="radio" id="lo5" name="people2" value="5" /><label class = "full" for="lo5" title="Awesome - 5 stars"></label>
              <input type="radio" id="lo54half" name="people2" value="4 and a half" /><label class="half" for="lo54half" title="Pretty good - 4.5 stars"></label>
              <input type="radio" id="lo4" name="people2" value="4" /><label class = "full" for="lo4" title="Pretty good - 4 stars"></label>
              <input type="radio" id="lo43half" name="people2" value="3 and a half" /><label class="half" for="lo43half" title="Meh - 3.5 stars"></label>
              <input type="radio" id="lo3" name="people2" value="3" /><label class = "full" for="lo3" title="Meh - 3 stars"></label>
              <input type="radio" id="lo32half" name="people2" value="2 and a half" /><label class="half" for="lo32half" title="Kinda bad - 2.5 stars"></label>
              <input type="radio" id="lo2" name="people2" value="2" /><label class = "full" for="lo2" title="Kinda bad - 2 stars"></label>
              <input type="radio" id="lo21half" name="people2" value="1 and a half" /><label class="half" for="lo21half" title="Meh - 1.5 stars"></label>
              <input type="radio" id="lo1" name="people2" value="1" /><label class = "full" for="lo1" title="Sucks big time - 1 star"></label>
              <input type="radio" id="lo1half" name="people2" value="half" /><label class="half" for="lo1half" title="Sucks big time - 0.5 stars"></label>
          </div>
        <img src="imgs/ivana.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Calet 2<button type="button" class="btn btn-info">2016</button>
            <br><span class="desc-boat">Sailing Boat</span></p>
          <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span></p>
        </div>
        </div>
    </div>      
    <div class="col-sm-4 col-md-6 col-lg-3 col-xs-12">
      <div class="card">
        <div class="rating">
              <input type="radio" id="lov5" name="people3" value="5" /><label class = "full" for="lov5" title="Awesome - 5 stars"></label>
              <input type="radio" id="lov54half" name="people3" value="4 and a half" /><label class="half" for="lov54half" title="Pretty good - 4.5 stars"></label>
              <input type="radio" id="lov4" name="people3" value="4" /><label class = "full" for="lov4" title="Pretty good - 4 stars"></label>
              <input type="radio" id="lov43half" name="people3" value="3 and a half" /><label class="half" for="lov43half" title="Meh - 3.5 stars"></label>
              <input type="radio" id="lov3" name="people3" value="3" /><label class = "full" for="lov3" title="Meh - 3 stars"></label>
              <input type="radio" id="lov32half" name="people3" value="2 and a half" /><label class="half" for="lov32half" title="Kinda bad - 2.5 stars"></label>
              <input type="radio" id="lov2" name="people3" value="2" /><label class = "full" for="lov2" title="Kinda bad - 2 stars"></label>
              <input type="radio" id="lov21half" name="people3" value="1 and a half" /><label class="half" for="lov21half" title="Meh - 1.5 stars"></label>
              <input type="radio" id="lov1" name="people3" value="1" /><label class = "full" for="lov1" title="Sucks big time - 1 star"></label>
              <input type="radio" id="lov1half" name="people3" value="half" /><label class="half" for="lov1half" title="Sucks big time - 0.5 stars"></label>
          </div>
        <img src="imgs/maximilian.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Calet 2<button type="button" class="btn btn-info">2016</button>
          <br><span class="desc-boat">Yacht</span></p>
          <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span></p>
        </div>
        </div>
    </div>   
    <div class="col-sm-4 col-md-6 col-lg-3 col-xs-12">
      <div class="card">
        <div class="rating">
              <input type="radio" id="love5" name="people4" value="5" /><label class = "full" for="love5" title="Awesome - 5 stars"></label>
              <input type="radio" id="love54half" name="people4" value="4 and a half" /><label class="half" for="love54half" title="Pretty good - 4.5 stars"></label>
              <input type="radio" id="love4" name="people4" value="4" /><label class = "full" for="love4" title="Pretty good - 4 stars"></label>
              <input type="radio" id="love43half" name="people4" value="3 and a half" /><label class="half" for="love43half" title="Meh - 3.5 stars"></label>
              <input type="radio" id="love3" name="people4" value="3" /><label class = "full" for="love3" title="Meh - 3 stars"></label>
              <input type="radio" id="love32half" name="people4" value="2 and a half" /><label class="half" for="love32half" title="Kinda bad - 2.5 stars"></label>
              <input type="radio" id="love2" name="people4" value="2" /><label class = "full" for="love2" title="Kinda bad - 2 stars"></label>
              <input type="radio" id="love21half" name="people4" value="1 and a half" /><label class="half" for="love21half" title="Meh - 1.5 stars"></label>
              <input type="radio" id="love1" name="people4" value="1" /><label class = "full" for="love1" title="Sucks big time - 1 star"></label>
              <input type="radio" id="love1half" name="people4" value="half" /><label class="half" for="love1half" title="Sucks big time - 0.5 stars"></label>
          </div>
        <img src="imgs/sonnie.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Calet 2<button type="button" class="btn btn-info">2016</button>
            <br><span class="desc-boat">Sailing Boat</span></p>
          <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span></p>
        </div>
    </div>   
    </div>  
</div>
</div>

<div class="container">
  <p class="mt-5 h5-col"><b>Book services and activities to get the most out of your trip</b></p> 
    <div class="row column mt-3">
      <div class="col-sm-4 col-md-6 col-lg-3 col-xs-12">
        <div class="card">
            <div class="rating alter">
              <input type="radio" id="star5" name="books1" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
              <input type="radio" id="star4half" name="books1" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
              <input type="radio" id="star4" name="books1" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
              <input type="radio" id="star3half" name="books1" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
              <input type="radio" id="star3" name="books1" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
              <input type="radio" id="star2half" name="books1" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
              <input type="radio" id="star2" name="books1" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
              <input type="radio" id="star1half" name="books1" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
              <input type="radio" id="star1" name="books1" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
              <input type="radio" id="starhalf" name="books1" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
          </div>
          <img src="imgs/ivana.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Beach Yoga<img src="boatImages/mainBoatImage.jpg" alt="Avatar" class="avatar-small">
              <br><span class="desc-boat">Masseuse</span></p>
            <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span></p>
        </div>
        </div>
      </div>
    <div class="col-sm-4 col-md-6 col-lg-3 col-xs-12">
      <div class="card">
        <div class="rating alter">
              <input type="radio" id="b5" name="books2" value="5" /><label class = "full" for="b5" title="Awesome - 5 stars"></label>
              <input type="radio" id="b4half" name="books2" value="4 and a half" /><label class="half" for="b4half" title="Pretty good - 4.5 stars"></label>
              <input type="radio" id="b4" name="books2" value="4" /><label class = "full" for="b4" title="Pretty good - 4 stars"></label>
              <input type="radio" id="b3half" name="books2" value="3 and a half" /><label class="half" for="b3half" title="Meh - 3.5 stars"></label>
              <input type="radio" id="b3" name="books2" value="3" /><label class = "full" for="b3" title="Meh - 3 stars"></label>
              <input type="radio" id="b2half" name="books2" value="2 and a half" /><label class="half" for="b2half" title="Kinda bad - 2.5 stars"></label>
              <input type="radio" id="b2" name="books2" value="2" /><label class = "full" for="b2" title="Kinda bad - 2 stars"></label>
              <input type="radio" id="b1half" name="books2" value="1 and a half" /><label class="half" for="b1half" title="Meh - 1.5 stars"></label>
              <input type="radio" id="b1" name="books2" value="1" /><label class = "full" for="b1" title="Sucks big time - 1 star"></label>
              <input type="radio" id="bhalf" name="books2" value="half" /><label class="half" for="bhalf" title="Sucks big time - 0.5 stars"></label>
          </div>
        <img src="imgs/inspirationfeed.png" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Beach Yoga<img src="boatImages/mainBoatImage.jpg" alt="Avatar" class="avatar-small">
             <br><span class="desc-boat">Yoga Class</span></p>
          <p class="card-title">
          <img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span></p>
        </div>
        </div>
    </div>      
    <div class="col-sm-4 col-md-6 col-lg-3 col-xs-12">
      <div class="card">
         <div class="rating alter">
              <input type="radio" id="boo5" name="books3" value="5" /><label class = "full" for="boo5" title="Awesome - 5 stars"></label>
              <input type="radio" id="boo4half" name="books3" value="4 and a half" /><label class="half" for="boo4half" title="Pretty good - 4.5 stars"></label>
              <input type="radio" id="boo4" name="books3" value="4" /><label class = "full" for="boo4" title="Pretty good - 4 stars"></label>
              <input type="radio" id="boo3half" name="books3" value="3 and a half" /><label class="half" for="boo3half" title="Meh - 3.5 stars"></label>
              <input type="radio" id="boo3" name="books3" value="3" /><label class = "full" for="boo3" title="Meh - 3 stars"></label>
              <input type="radio" id="boo2half" name="books3" value="2 and a half" /><label class="half" for="boo2half" title="Kinda bad - 2.5 stars"></label>
              <input type="radio" id="boo2" name="books3" value="2" /><label class = "full" for="boo2" title="Kinda bad - 2 stars"></label>
              <input type="radio" id="boo1half" name="books3" value="1 and a half" /><label class="half" for="boo1half" title="Meh - 1.5 stars"></label>
              <input type="radio" id="boo1" name="books3" value="1" /><label class = "full" for="boo1" title="Sucks big time - 1 star"></label>
              <input type="radio" id="boohalf" name="books3" value="half" /><label class="half" for="boohalf" title="Sucks big time - 0.5 stars"></label>
          </div>
        <img src="imgs/bobby.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Beach Yoga<img src="boatImages/mainBoatImage.jpg" alt="Avatar" class="avatar-small">
          <br><span class="desc-boat yellow">Equipment</span></p>
          <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span></p>
        </div>
        </div>
    </div>   
    <div class="col-sm-4 col-md-6 col-lg-3 col-xs-12">
      <div class="card">
        <div class="rating alter">
              <input type="radio" id="book5" name="books4" value="5" /><label class = "full" for="book5" title="Awesome - 5 stars"></label>
              <input type="radio" id="book4half" name="books4" value="4 and a half" /><label class="half" for="book4half" title="Pretty good - 4.5 stars"></label>
              <input type="radio" id="book4" name="books4" value="4" /><label class = "full" for="book4" title="Pretty good - 4 stars"></label>
              <input type="radio" id="book3half" name="books4" value="3 and a half" /><label class="half" for="book3half" title="Meh - 3.5 stars"></label>
              <input type="radio" id="book3" name="books4" value="3" /><label class = "full" for="book3" title="Meh - 3 stars"></label>
              <input type="radio" id="book2half" name="books4" value="2 and a half" /><label class="half" for="book2half" title="Kinda bad - 2.5 stars"></label>
              <input type="radio" id="book2" name="books4" value="2" /><label class = "full" for="book2" title="Kinda bad - 2 stars"></label>
              <input type="radio" id="book1half" name="books4" value="1 and a half" /><label class="half" for="book1half" title="Meh - 1.5 stars"></label>
              <input type="radio" id="book1" name="books4" value="1" /><label class = "full" for="book1" title="Sucks big time - 1 star"></label>
              <input type="radio" id="bookhalf" name="books4" value="half" /><label class="half" for="bookhalf" title="Sucks big time - 0.5 stars"></label>
          </div>
        <img src="imgs/maximilian.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Beach Yoga<img src="boatImages/mainBoatImage.jpg" alt="Avatar" class="avatar-small">
          <br><span class="desc-boat">Chef</span></p>
          <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span></p>
        </div>
        </div>
    </div>   
    </div>  <!-- Enf of yoga row -->
    <button type="button" class="btn btn-small"><b>SEE ALL</b></button>
</div>
<br>

<div class="container">
    <div class="row mt-5">
      <div class="col-sm-12">
          <div class="card">
            <div class="why">
              <p class="mb-0"><a href="#" class="caption tex-dec"><b>Why book with us? <i class="fa fa-arrow-right"></i></b><br><span class="caption-2">See why Yacht Wizard is the best</span></a></p>
              <p><a><span class="caption-2">choice for your trip.</span></a></p>
          </div>
            <img src="imgs/mainBoatImage.jpg" class="card-img-top" alt="...">   
        </div>
      </div>
    </div>
  </div>

<div class="container mt-5">
<div id="lastfront" class="carousel slide ml-0" data-interval="false" data-ride="carousel" data-pause="hover">
  <h3 class="row-title"><b>Recommended for you</b></h3> 
  <div class="carousel-inner">

    <div class="carousel-item active">
      <div class="row column">
            <div class="col-sm-4">
              <div class="card">
                <div class="rating ratecarousel">
                  <input type="radio" id="reco5" name="recos1" value="5" /><label class = "full" for="reco5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="reco4half" name="recos1" value="4 and a half" /><label class="half" for="reco4half" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="reco4" name="recos1" value="4" /><label class = "full" for="reco4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="reco3half" name="recos1" value="3 and a half" /><label class="half" for="reco3half" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="reco3" name="recos1" value="3" /><label class = "full" for="reco3" title="Meh - 3 stars"></label>
                  <input type="radio" id="reco2half" name="recos1" value="2 and a half" /><label class="half" for="reco2half" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="reco2" name="recos1" value="2" /><label class = "full" for="reco2" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="reco1half" name="recos1" value="1 and a half" /><label class="half" for="reco1half" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="reco1" name="recos1" value="1" /><label class = "full" for="reco1" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="recohalf" name="recos1" value="half" /><label class="half" for="recohalf" title="Sucks big time - 0.5 stars"></label>
              </div>
                <img src="imgs/mainBoatImage.jpg" class="d-block w-100 card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text">Dufour 500 <button type="button" class="btn btn-info">2016</button>
                  <br><span class="desc-boat">Yacht</span></p>
                  <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="rating ratecarousel">
                    <input type="radio" id="recom5" name="recos2" value="5" /><label class = "full" for="recom5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="recom4half" name="recos2" value="4 and a half" /><label class="half" for="recom4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" id="recom4" name="recos2" value="4" /><label class = "full" for="recom4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="recom3half" name="recos2" value="3 and a half" /><label class="half" for="recom3half" title="Meh - 3.5 stars"></label>
                    <input type="radio" id="recom3" name="recos2" value="3" /><label class = "full" for="recom3" title="Meh - 3 stars"></label>
                    <input type="radio" id="recom2half" name="recos2" value="2 and a half" /><label class="half" for="recom2half" title="Kinda bad - 2.5 stars"></label>
                    <input type="radio" id="recom2" name="recos2" value="2" /><label class = "full" for="recom2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="recom1half" name="recos2" value="1 and a half" /><label class="half" for="recom1half" title="Meh - 1.5 stars"></label>
                    <input type="radio" id="recom1" name="recos2" value="1" /><label class = "full" for="recom1" title="Sucks big time - 1 star"></label>
                    <input type="radio" id="recomhalf" name="recos2" value="half" /><label class="half" for="recomhalf" title="Sucks big time - 0.5 stars"></label>
              </div>
                <img src="imgs/bobby.png" class="d-block w-100 card-img-top" alt="...">
                <div class="card-body">
                   <p class="card-text">Dufour 500 <button type="button" class="btn btn-info">2016</button>
                    <br><span class="desc-boat">Sailing Boat</span></p>
                  <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="rating ratecarousel">
                    <input type="radio" id="recommend5" name="recos3" value="5" /><label class = "full" for="recommend5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="recommend4half" name="recos3" value="4 and a half" /><label class="half" for="recommend4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" id="recommend4" name="recos3" value="4" /><label class = "full" for="recommend4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="recommend3half" name="recos3" value="3 and a half" /><label class="half" for="recommend3half" title="Meh - 3.5 stars"></label>
                    <input type="radio" id="recommend3" name="recos3" value="3" /><label class = "full" for="recommend3" title="Meh - 3 stars"></label>
                    <input type="radio" id="recommend2half" name="recos3" value="2 and a half" /><label class="half" for="recommend2half" title="Kinda bad - 2.5 stars"></label>
                    <input type="radio" id="recommend2" name="recos3" value="2" /><label class = "full" for="recommend2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="recommend1half" name="recos3" value="1 and a half" /><label class="half" for="recommend1half" title="Meh - 1.5 stars"></label>
                    <input type="radio" id="recommend1" name="recos3" value="1" /><label class = "full" for="recommend1" title="Sucks big time - 1 star"></label>
                    <input type="radio" id="recommendhalf" name="recos3" value="half" /><label class="half" for="recommendhalf" title="Sucks big time - 0.5 stars"></label>
              </div>
                <img src="imgs/ivana.png" class="d-block w-100 card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Dufour 500 <button type="button" class="btn btn-info">2016</button>
                    <br><span class="desc-boat">Yacht</span></p>
                  <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span></p>
                </div>
              </div>
            </div>
          </div>
    </div>

     <div class="carousel-item">
      <div class="row column">
            <div class="col-sm-4">
              <div class="card">
                <div class="rating ratecarousel">
                    <input type="radio" id="extra5" name="recos4" value="5" /><label class = "full" for="extra5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="extra4half" name="recos4" value="4 and a half" /><label class="half" for="extra4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" id="extra4" name="recos3" value="4" /><label class = "full" for="extra4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="extra3half" name="recos4" value="3 and a half" /><label class="half" for="extra3half" title="Meh - 3.5 stars"></label>
                    <input type="radio" id="extra3" name="recos4" value="3" /><label class = "full" for="extra3" title="Meh - 3 stars"></label>
                    <input type="radio" id="extra2half" name="recos4" value="2 and a half" /><label class="half" for="extra2half" title="Kinda bad - 2.5 stars"></label>
                    <input type="radio" id="extra2" name="recos4" value="2" /><label class = "full" for="extra2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="extra1half" name="recos4" value="1 and a half" /><label class="half" for="extra1half" title="Meh - 1.5 stars"></label>
                    <input type="radio" id="extra1" name="recos4" value="1" /><label class = "full" for="extra1" title="Sucks big time - 1 star"></label>
                    <input type="radio" id="extrahalf" name="recos4" value="half" /><label class="half" for="extrahalf" title="Sucks big time - 0.5 stars"></label>
              </div>
                <img src="imgs/mainBoatImage.jpg" class="d-block w-100 card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text">Dufour 500 <button type="button" class="btn btn-info">2016</button>
                  <br><span class="desc-boat">Yacht</span></p>
                  <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="rating ratecarousel">
                    <input type="radio" id="extras5" name="recos5" value="5" /><label class = "full" for="extras5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="extras4half" name="recos5" value="4 and a half" /><label class="half" for="extras4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" id="extras4" name="recos5" value="4" /><label class = "full" for="extras4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="extras3half" name="recos5" value="3 and a half" /><label class="half" for="extras3half" title="Meh - 3.5 stars"></label>
                    <input type="radio" id="extras3" name="recos5" value="3" /><label class = "full" for="extras3" title="Meh - 3 stars"></label>
                    <input type="radio" id="extras2half" name="recos5" value="2 and a half" /><label class="half" for="extras2half" title="Kinda bad - 2.5 stars"></label>
                    <input type="radio" id="extras2" name="recos5" value="2" /><label class = "full" for="extras2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="extras1half" name="recos5" value="1 and a half" /><label class="half" for="extras1half" title="Meh - 1.5 stars"></label>
                    <input type="radio" id="extras1" name="recos5" value="1" /><label class = "full" for="extras1" title="Sucks big time - 1 star"></label>
                    <input type="radio" id="extrashalf" name="recos5" value="half" /><label class="half" for="extrashalf" title="Sucks big time - 0.5 stars"></label>
              </div>
                <img src="imgs/bobby.png" class="d-block w-100 card-img-top" alt="...">
                <div class="card-body">
                   <p class="card-text">Dufour 500 <button type="button" class="btn btn-info">2016</button>
                    <br><span class="desc-boat">Sailing Boat</span></p>
                  <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="rating ratecarousel">
                    <input type="radio" id="extrax5" name="recos6" value="5" /><label class = "full" for="extrax5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="extrax4half" name="recos6" value="4 and a half" /><label class="half" for="extrax4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" id="extrax4" name="recos6" value="4" /><label class = "full" for="extrax4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="extrax3half" name="recos6" value="3 and a half" /><label class="half" for="extrax3half" title="Meh - 3.5 stars"></label>
                    <input type="radio" id="extrax3" name="recos6" value="3" /><label class = "full" for="extrax3" title="Meh - 3 stars"></label>
                    <input type="radio" id="extrax2half" name="recos6" value="2 and a half" /><label class="half" for="extrax2half" title="Kinda bad - 2.5 stars"></label>
                    <input type="radio" id="extrax2" name="recos6" value="2" /><label class = "full" for="extrax2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="extrax1half" name="recos6" value="1 and a half" /><label class="half" for="extrax1half" title="Meh - 1.5 stars"></label>
                    <input type="radio" id="extrax1" name="recos6" value="1" /><label class = "full" for="extrax1" title="Sucks big time - 1 star"></label>
                    <input type="radio" id="extraxhalf" name="recos6" value="half" /><label class="half" for="extraxhalf" title="Sucks big time - 0.5 stars"></label>
              </div>
                <img src="imgs/ivana.png" class="d-block w-100 card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Dufour 500 <button type="button" class="btn btn-info">2016</button>
                    <br><span class="desc-boat">Yacht</span></p>
                  <p class="card-title"><img src="imgs/map-marker.png" alt="" class="map map-sign"><span class="country-col">Greece</span></p>
                </div>
              </div>
            </div>
          </div>
    </div>
    
  </div>
  <a class="carousel-control-prev arrows" href="#lastfront" role="button" data-slide="prev">            
  <i class="fa fa-chevron-left fa-2x carousel-pointer ml-80"></i>
  <span class="sr-only">Previous</span></a>
  <a class="carousel-control-next text-faded arrows" href="#lastfront" role="button" data-slide="next">
  <i class="fa fa-chevron-right fa-2x carousel-pointer m-80"></i>       
  <span class="sr-only">Next</span></a>
</div>
 <button type="button" class="btn btn-small"><b>SEE ALL</b></button> 
</div>
<br>



@endsection