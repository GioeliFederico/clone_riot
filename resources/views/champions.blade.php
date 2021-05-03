<x-layout>

    <header
      id="champions-header"
      class="container-fluid d-flex flex-column align-items-center"
    >
      <div><h2 class="karla">CHOOSE YOUR</h2></div>
      <div><h1 class="karla">CHAMPIONS</h1></div>
      <div><p class="monserrat">With more than 140 champions, you’ll find the perfect match for your playstyle. Master one, or master them all.</p></div>
    </header>

    <div class="grid-container mx-auto mt-5">
        @foreach ($champions as $champion)
        <div class="grid-element grid-element-border">
            <img
              class="grid-img"
              src="{{$champion['img']}}"
              alt=""
            />
            <h5 class="karla">{{$champion['name']}}</h5>
        </div>
        @endforeach
    </div>

    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6" id="champions-role">

            </div>
            <div class="col-12 col-md-6 d-flex align-items-center" id="circle-animation">
                <img
                  class="circle-img mx-auto"
                  src="./media/fighter-7a08920b696ecdb673edeeae1d3c616e.png"
                  alt=""
                />
                <div id="circle-element">
                  <div class="inner-circle"></div>
                  <div class="circle1"></div>
                  <div class="circle2"></div>
                  <div class="circle3"></div>
                </div>
            </div>
        </div>
    </div> --}}



{{--
    <div id="container">
        <div class="page_content">
          <img src="http://placekitten.com/360/300" width="360" />
          <h1>"Responsive" resizing using scale transform</h1>
          <h3>Content in this box is styled as if it were inside a fixed 800x600 div. This is then scaled up or down according to the container.</h3>
          <p>Content in this box won't get moved around; even this paragraph absolutely positioned with pixel values.<br><br>
            It even works down to mobile sizes, although obviously stuff may be unreadable then.</p>
        </div>
    </div>
 --}}

</x-layout>
