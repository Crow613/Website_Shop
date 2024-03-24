
    <section class=" block  text-gray-800 text-center ">
       <p>MAPS</p>
        <div class="relative p-2 h-60">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12094.57348593182!2d-74.00599512526003!3d40.72586666928451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598f988156a9%3A0xd54629bdf9d61d68!2sBroadway-Lafayette%20St!5e0!3m2!1spl!2spl!4v1624523797308!5m2!1spl!2spl"
            class="  h-full w-full border-0 rounded-md" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="-m-1 flex flex-wrap md:-m-2">
            <div class="flex w-1/3 flex-wrap">
              <div class="w-full p-1 md:p-2">
                <p>{{''.$data['name']}}</p>
                <p>{{'temp : '.$data['main']['temp'].' /cels'}}</p>
                <p>{{$data['id']}}</p>
                <p>{{$data['name']}}</p>
              </div>
            </div>
        </div>

    </section>



