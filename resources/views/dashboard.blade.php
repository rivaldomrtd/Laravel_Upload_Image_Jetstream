<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="text-align: center">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    @foreach ($images as $image)
    <div class="container-fluid">
      <h1 class="display-5 text-center mb-5">Categories</h1>
      <div class="card-deck mb-5">
        <div class="col-md-4 col-sm-12 mt-4">
            <div class="card">
                <img src="{{$image->file}}" class="card-img-top img-thumbnail" alt="gambar" >
                <div class="card-body">
                    <h5 class="card-title">{{ $image->title }}</h5>
                    <a href="/detail/{{ $image->id }}" class="btn btn-primary">Baca Artikel</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top img-thumbnail" src="img/images.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Laravel</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-secondary">Readmore</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top img-thumbnail" src="img/express.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Express js</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-secondary">Readmore</a>
            </div>
        </div>
      </div>
    </div>
     <div class="container-fluid">
      <!-- Example row of columns -->
      <div class="row p-5 bg-dark text-light">
        <div class="col-md-12">
            <h1 class="display-5 text-center mb-5">Article</h1>
        </div>
        <div class="col-md-4">
          <h2>Cara Install Express js</h2>
          <p>bewoksatukosong.com | Untuk pelajaran pertama yang perlu dilakukan adalah Install Boostrap 4. Ada beberapa cara untuk menginstall boostrap 4. Tapi kali ini om bewok akan memberikan cara install-Nya yang sudah sering digunakan oleh para developer. Ada 2 cara untuk install boostrap 4.
              Offline : kamu tidak membutuhkan internet untuk meload website tersebut.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Cara Install Laravel</h2>
          <p>bewoksatukosong.com | Emoji sudah menjadi hal yang umum bagi pengguna handphone android iphone, dan laptop apple. Tapi ternyata windows juga tidak mau kalah untuk mengeluarkan       emoji. om bewok tidak tau apakah ini resmi atau tidak dalam windows, karena dalam pengunaan ini bener-bener
              tricky. kita ga perlu berlama - lama lagi mari kita langsung saja coba
               </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Cara Install Codeigniter 2018</h2>
          <p>bewoksatukosong.com | Hallo semuanya balik lagi dengan om bewok, kali ini om bewok akan share ke kamu "Cara Install Codeigniter 2018", gampang banget untuk install codeigniter. oke mari kita mulai cara install nya
          Kamu kunjugi website https://www.codeigniter.com/download.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Crud Menggunakan Codeigniter</h2>
            <p>bewoksatukosong.com | Untuk pelajaran pertama yang perlu dilakukan adalah Install Boostrap 4. Ada beberapa cara untuk menginstall boostrap 4. Tapi kali ini om bewok akan memberikan cara install-Nya yang sudah sering digunakan oleh para developer. Ada 2 cara untuk install boostrap 4.
                Offline : kamu tidak membutuhkan internet untuk meload website tersebut.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Crud Menggunakan Laravel</h2>
            <p>bewoksatukosong.com | Emoji sudah menjadi hal yang umum bagi pengguna handphone android iphone, dan laptop apple. Tapi ternyata windows juga tidak mau kalah untuk mengeluarkan       emoji. om bewok tidak tau apakah ini resmi atau tidak dalam windows, karena dalam pengunaan ini bener-bener
                tricky. kita ga perlu berlama - lama lagi mari kita langsung saja coba
                 </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Crud Menggunakan Express js</h2>
            <p>bewoksatukosong.com | Hallo semuanya balik lagi dengan om bewok, kali ini om bewok akan share ke kamu "Cara Install Codeigniter 2018", gampang banget untuk install codeigniter. oke mari kita mulai cara install nya
            Kamu kunjugi website https://www.codeigniter.com/download.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
      </div>
      <hr>
    </div> <!-- /container -->

    <!-- Modal -->
    <div class="modal fade" id="kampret" tabindex="-1" role="dialog" aria-labelledby="kampret123" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="kampret123">Daftar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Daftar</button>
            </div>
          </div>
        </div>
      </div>

     <!-- Modal -->
     <div class="modal fade" id="free" tabindex="-1" role="dialog" aria-labelledby="free123" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="free123">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Login</button>
            </div>
          </div>
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    @endforeach
</x-app-layout>
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$image->file}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">"{{$image->title}}"</h5>
      <p class="card-text">"{{$image->description}}"</p>
      <a href="#" class="btn btn-primary">Baca Selanjutnya</a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
