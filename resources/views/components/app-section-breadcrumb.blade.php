<section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">Tu estas aqui:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        @foreach($route as $index => $sectionRoute)
                                            @if(sizeof($route)-1 > $index)
                                                <li class="list-inline-item active">
                                                    <a href="#">{{$sectionRoute}}</a>
                                                </li>
                                                <li class="list-inline-item seprate">
                                                    <span>/</span>
                                                </li>
                                            @else
                                                <li class="list-inline-item">{{$sectionRoute}}</li>
                                            @endif
                                        @endforeach
                                        
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>