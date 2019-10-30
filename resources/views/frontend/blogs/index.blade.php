<div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
        </h1>
    
     
        <div class="row">
        
        <div class="col-md-8">
                @foreach ($quotes as $quote)
                <!-- Blog Post -->
                <div class="card mb-4">
                  <img class="img-fluid rounded" src="@if(!is_null($quote->images)){{asset('images')}}/{{$quote->images->name }}@endif" alt="Card image cap" width="400">
                  <div class="card-body">
                  <h2 class="card-title">{{$quote->tittle}}</h2>
                  <p class="card-text">{{$quote->subject}}</p>
                  <a href="{{url('blog/'. $quote->slug)}}" class="btn btn-primary">Read More &rarr;</a>
                  </div>
                  <div class="card-footer text-muted">
                    Posted on January 1, 2017 by
                    <a href="#">Start Bootstrap</a>
                  </div>
                </div>
       
                
                @endforeach
                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                  <li class="page-item">
                    <a class="page-link" href="#">&larr; Older</a>
                  </li>
                  <li class="page-item disabled">
                    <a class="page-link" href="#">Newer &rarr;</a>
                  </li>
                </ul>
              
        
              </div>
        
    
          <!-- Sidebar Widgets Column -->
          <div class="col-md-4">
    
            <!-- Search Widget -->
            <div class="card mb-4">
              <h5 class="card-header">Search</h5>
              <div class="card-body">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
    
            <!-- Categories Widget -->
            <div class="card my-4">
              <h5 class="card-header">Categories</h5>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6">

                    <ul class="list-unstyled mb-0">
                      <li>
                          @foreach ($tags as $tag)
                            {{-- <a href="">{{$tag->tag_name}}</a> --}}
                            <a href="{{url('/blog/{slug}'.$tag->idtags)}}">{{$tag->tag_name}}</a>
                          @endforeach
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
    
            <!-- Side Widget -->
            <div class="card my-4">
              <h5 class="card-header">Side Widget</h5>
              <div class="card-body">
                You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
              </div>
            </div>
    
          </div>
    
        </div>
        <!-- /.row -->
    
      </div>