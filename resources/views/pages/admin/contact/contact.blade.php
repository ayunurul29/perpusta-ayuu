@extends('layouts.admin')

@section('content')
<!-- section -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-row">
                            <h3>Contact Information</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <ul class="list-style">
                                <li><p><strong>Email:</strong> <a href="#"><span class="cf_email" data-cfemail="93c4f6f1fef2f4d3f6fef2faffbdf0fcfe">Ayunurul@gmail.com</span></a></p></li>
                                <li><p><strong>Phone:</strong> 085660458377</p></li>
                                <li><p><strong>Alamat:</strong>Bandung</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="section-row">
                            <h3>Send A Message</h3>
                              <form action="{{ route('contact_store') }}" method="POST" enctype="multipart/form-data">
              @csrf
            
                            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  placeholder="email" >
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
               
                
                <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder=" subject" >
                @error('subject')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                   <div class="form-group">
                <label for="pesan">Message</label>
                <textarea class="form-control @error('pesan') is-invalid @enderror" id="pesan" name="pesan"  placeholder="sampaikan pesan"></textarea>
                @error('pesan')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
               
                                        <button type="submit" class="primary-button">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->
        @endsection