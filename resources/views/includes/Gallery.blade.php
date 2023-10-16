@section('content_5')
 
<div id="wrapper" >
      <div id="carousel">
        <div id="content">
        <div class="box-img">
         
         <img class="item"  src="{{url('imgs/pexels-владимир-николаевич-9409684.jpg')}}"/>
         
          </div>
          
          <div class="box-img">
        
        <img class="box-img"   src="{{url('imgs/pexels-ben-cheung-441379.jpg')}}"/>
       
        </div>
         
          <div class="box-img">
          <img  class="item" src="{{url('imgs/pexels-jay-949406.jpg')}}"/>
           
            </div>
           
          <div class="box-img">
        
         <img  class="item" src="{{url('imgs/pexels-pixabay-261395.jpg')}}"/>
           
            </div>
           
            <div class="box-img">
       
             <img class="item" src="{{url('imgs/pexels-robert-stokoe-711186.jpg')}}"/>
             </div>  
             <div  class="box-img">
         
         <img class="item" src="{{url('imgs/pexels-cassiano-psomas-1045200.jpg')}}"/>
      
        </div>
            
        </div>
      </div>
      <button id="prev">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
        >
          <path fill="none" d="M0 0h24v24H0V0z" />
          <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
        </svg>
      </button>
      <button id="next">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
        >
          <path fill="none" d="M0 0h24v24H0V0z" />
          <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
        </svg>
      </button>
    </div>
@endsection