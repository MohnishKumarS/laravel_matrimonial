@extends('layouts.main')


@section('content')
    <section>
        <div class="mt-5">
            <h2 class="sec-title">Contact us</h2>

            <div class="mt-5">
                <div class="row contact-section1-row gx-4 px-md-4 px-5 px-sm-5 px-lg-3">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 col1 ">
                        <div class="">
                            <img src="https://img.icons8.com/bubbles/100/null/address.png" />
                            <h5>Address</h5>
                            <address>12/747 second street, Madurai,<br> Tamilnadu - 600012</address>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 col2 mt-lg-0 mt-md-0 mt-sm-4 mt-4">
                        <div>
                            <img src="https://img.icons8.com/bubbles/100/null/phone--v1.png" />
                            <h5>Phone</h5>
                            <p class="m-0"><a href="tel:">91+ 8939721118</a> </p>
                            <p class="m-0 mt-2"><a href="tel:">91+ 8939721121</a> </p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 col3 mt-lg-0 mt-md-4 mt-sm-4 mt-4">
                        <div>
                            <img src="https://img.icons8.com/bubbles/100/null/clock.png" />
                            <h5>Working</h5>
                            <p class="m-0">Mon-Sat : <span>09am - 06pm (opening)</span></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 col4 mt-lg-0 mt-md-4 mt-sm-4 mt-4">
                        <div>

                            <img src="https://img.icons8.com/bubbles/100/null/new-post.png" />
                            <h5>Email</h5>
                            <pm><a href="mailto:support@sowndharyammatrimony.com">support@sowndharyammatrimony.com</a></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container mt-5">

                <div class="contact-form-page">
                    <form action="{{ route('contactStore') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="row align-items-center pb-5">
                            <div class="col-lg-6">
                                <div>
                                    <img src="{{ asset('image/gallery/c4.svg') }}" class="img-fluid" alt="contact-img">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-column shadow p-4">
                                    <h3 class="text-main text-center">Get in Touch</h3>
                                    <p class="m-0 text-secondary text-center">Drop us your contact details, we will reach
                                        you soon!</p>
                                    <div class="">
                                        <div class="mt-3">
                                            <label for="" class="form-label">Name<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-lg" name="username"
                                                placeholder="Enter your name" required value="{{old('username')}}">
                                            @error('username')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mt-3">
                                            <label for="" class="form-label">Email<span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control form-control-lg" name="email"
                                                placeholder="xyz@mail.com" required value="{{old('email')}}">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mt-3">
                                            <label for="" class="form-label">Mobile<span
                                                    class="text-danger">*</span></label>
                                            <input type="tel" class="form-control form-control-lg" name="mobile" maxlength="10"
                                                onkeyup="this.value = this.value.replace(/[^0-9]/g,'')"
                                                placeholder="Enter your Mobile no" required value="{{old('mobile')}}">
                                            @error('mobile')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mt-3">
                                            <label class="form-label">Message</label>
                                            <textarea class="form-control form-control-lg" name="message" rows="2" placeholder="Leave a message here">{{old('message')}}</textarea>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <button class="btn-main w-25" type="submit"
                                                name="contact_submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

 
                <div class="contact-map-section mt-5">
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d62219.51120432538!2d80.07623139251285!3d12.925744529076823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3a525f6dab77efa7%3A0xa0e8f44f5feebda7!2sTambaram%20railway%20station%2C%20East%20Tambaram%2C%20Tambaram%2C%20Chennai%2C%20Tamil%20Nadu%20600045!3m2!1d12.925664099999999!2d80.1174315!5e0!3m2!1sen!2sin!4v1681562975023!5m2!1sen!2sin"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@push('styles')
    <style>
        .contact-section1-row {
            word-wrap: break-word;
            color: rgb(165, 165, 165);
            font-weight: 600
        }

        .contact-section1-row .col-lg-3>div {
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            height: 250px;
            box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.226);

        }

        .contact-section1-row .col-lg-3>div:hover {
            background-color: rgba(97, 97, 255, 0.199);
        }

        .contact-section1-row .col-lg-3 div h5 {
            font-size: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 700;
            margin-top: 15px;
            color: rgb(92, 76, 76)
        }

        .contact-section1-row .col-lg-3 a {
            text-decoration: none;
            color: rgb(165, 165, 165);
        }


        .contact-map-section iframe {
            width: 100%;
            height: 450px;
        }
    </style>
@endpush
