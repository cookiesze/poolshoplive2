<!--Start footer area Style4-->
<footer class="footer-area style4">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="single-footer-widget marbtm50-s4">
                    <div class="our-info-box">
                        <div class="footer-logo">
                            <a href="index-2.html">
                                <img src="{{ asset('assets/uploads/logo/1679862863_Golden_-1.png') }}" style="height: 48px" class="edit-image" alt="">
                            </a>
                        </div>
                        <div class="text">
                            <p><strong style="color: #fff">บริษัทจีโนลกรุ๊ป ซีที อิเล็คทริค ฟิเคชั่น จำกัด</strong> <br> ตั้งอยู่ที่ 49/3 หมู่ 8 ตำบล นาดี อำเภอ เมือง จังหวัด สมุทรสาคร <br><strong style="color: #fff">เป็นผู้ผลิต</strong>  ตู้คอนซูเมอร์ยูนิต เบรกเกอร์ เครื่องตัดไฟ มิเตอร์ไฟฟ้า และอุปกรณ์ไฟฟ้าครบวงจร <br><strong style="color: #fff">ได้รับการรับมาตรฐาน ISO 9001-2008</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="single-footer-widget s4">
                    <div class="title-style2">
                        <h3>Menu Links</h3>
                    </div>
                    <div class="links">
                        <ul class="float-left">
                            <li class=""><a href="/">Home</a></li>
                        <li class=""><a href="{{ url('/guest/about_us') }}">About Us</a>
                        </li>
                        <li class=""><a href="{{ url('/guest/product') }}">Products</a>
                        </li>
                        <li class=""><a href="{{ url('/guest/post') }}">News</a>
                        </li>
                        <li><a href="{{ url('/guest/contact_us') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-3 col-md-12 col-sm-12">
                <div class="single-footer-widget pdtop50-s4">
                    <div class="title-style2">
                        <h3>Tags</h3>
                    </div>
                    <div class="tag-box pull-left">
                        <ul>
                            @foreach($tags as $arr)
                            <li><a href="{{ url('guest/tags',['tag' => $arr->name]) }}">{{ $arr->name }},</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>
<!--End footer area style4-->

