@extends('layout.layoutchinh')
@section('content')
@if($chitiet)
<style>
    .holder {
        /* display: flex; */
        flex-direction: column;
        align-items: center;
    }

    .holder .get-it-on-github {
        margin-top: 24px;
        margin-bottom: 24px;
        font-family: "Roboto";
        color: #55606E;
    }

    .audio.green-audio-player {
        /* width: 400px; */
        min-width: 300px;
        height: 56px;
        box-shadow: 0 4px 16px 0 rgba(0, 0, 0, 0.07);
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-left: 24px;
        padding-right: 24px;
        border-radius: 4px;
        user-select: none;
        -webkit-user-select: none;
        background-color: #fff;
    }

    .audio.green-audio-player .play-pause-btn {
        display: none;
        cursor: pointer;
    }

    /* .audio.green-audio-player .spinner {
        width: 18px;
        height: 18px;
        background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/355309/loading.png);
        background-size: cover;
        background-repeat: no-repeat;
        animation: spin 0.4s linear infinite;
    } */

    .audio.green-audio-player .slider {
        flex-grow: 1;
        background-color: #D8D8D8;
        cursor: pointer;
        position: relative;
    }

    .audio.green-audio-player .slider .progress {
        background-color: #44BFA3;
        border-radius: inherit;
        position: absolute;
        pointer-events: none;
    }

    .audio.green-audio-player .slider .progress .pin {
        height: 16px;
        width: 16px;
        border-radius: 8px;
        background-color: #44BFA3;
        position: absolute;
        pointer-events: all;
        box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.32);
    }

    .audio.green-audio-player .controls {
        font-family: "Roboto", sans-serif;
        font-size: 16px;
        line-height: 18px;
        color: #55606E;
        display: flex;
        flex-grow: 1;
        justify-content: space-between;
        align-items: center;
        margin-left: 24px;
        margin-right: 24px;
    }

    .audio.green-audio-player .controls .slider {
        margin-left: 16px;
        margin-right: 16px;
        border-radius: 2px;
        height: 4px;
    }

    .audio.green-audio-player .controls .slider .progress {
        width: 0;
        height: 100%;
    }

    .audio.green-audio-player .controls .slider .progress .pin {
        right: -8px;
        top: -6px;
    }

    .audio.green-audio-player .controls span {
        cursor: default;
    }

    .audio.green-audio-player .volume {
        position: relative;
    }

    .audio.green-audio-player .volume .volume-btn {
        cursor: pointer;
    }

    .audio.green-audio-player .volume .volume-btn.open path {
        fill: #44BFA3;
    }

    /*
    .audio.green-audio-player .volume .volume-controls {
        width: 30px;
        height: 135px;
        background-color: rgba(0, 0, 0, 0.62);
        border-radius: 7px;
        position: absolute;
        left: -3px;
        bottom: 52px;
        flex-direction: column;
        align-items: center;
        display: flex;
    } */

    .audio.green-audio-player .volume .volume-controls.hidden {
        display: none;
    }

    .audio.green-audio-player .volume .volume-controls .slider {
        margin-top: 12px;
        margin-bottom: 12px;
        width: 6px;
        border-radius: 3px;
    }

    .audio.green-audio-player .volume .volume-controls .slider .progress {
        bottom: 0;
        height: 100%;
        width: 6px;
    }

    .audio.green-audio-player .volume .volume-controls .slider .progress .pin {
        left: -5px;
        top: -8px;
    }

    svg,
    img {
        display: block;
    }

    html,
    body {
        height: 100%;
    }

    /* body {
        display: flex;
        justify-content: center;
        align-items: center;
        background: #F8FFAE;
        background: -webkit-linear-gradient(-65deg, #43C6AC, #F8FFAE);
        background: linear-gradient(-65deg, #43C6AC, #F8FFAE);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    } */

    @keyframes spin {
        from {
            transform: rotateZ(0);
        }

        to {
            transform: rotateZ(1turn);
        }
    }
</style>
<div class="set-web mx-auto">
    <div class="text-2xl font-bold border-b border-red-700 text-blue-800 mb-4"> </div>
    <div class="grid grid-cols-12">
        <div class="grid grid-cols-12 col-span-12 mt-6">
            <div class="col-span-7 mr-10 grid grid-cols-12">

                <div class="col-span-5 mr-4">
                    <div>
                        <!-- <img class="w-full" src="/storage/{{$chitiet->anhdaidien}}" alt=""> -->
                        <img class="w-full" src="http://dancaxunghe.test/images/3418_th.jpg" alt="">
                    </div>
                </div>
                <div class="col-span-7">
                    <p class="mb-3 text-lg text-blue-700 ">{{ $chitiet->name}}</p>
                    <p><span class="text-sm font-bold ">Địa chỉ:</span> {{ $chitiet->diachi}}</p>
                    <p><span class="text-sm font-bold">Lượng thành viên:</span> {{ $chitiet->luongthanhvien}}</p>
                </div>
                <div class="col-span-12">
                    <p class="text-justify">
                        <span>Quy chế:</span> {{ $chitiet->quyche}}
                    </p>
                </div>



                <!-- <div class="col-span-12 ">
                        <div class="border-2 border-indigo-600">
                            <p>Thông tin câu lạc bộ :</p>
                            <p>Địa chỉ :</p>
                            <p>Số lượng thành viên :</p>
                            <p>Hình thức hoạt động :</p>
                        </div>
                    </div> -->
            </div>
            <div class="col-span-5 grid grid-cols-12">
                <div class="col-span-12 mb-4 text-blue-800 text-xl">
                    Danh sách thành viên
                </div>
                <div class="col-span-12 grid grid-cols-12 ">
                    <div class="overflow-x-auto flex col-span-12">
                        <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                            <div class="flex flex-col items-center justify-center gap-3">
                                <img class="w-16 h-16 rounded-full" src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80" />
                                <strong class="text-gray-900 text-xs font-medium">Andrew</strong>
                            </div>
                        </div>
                        <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                            <div class="flex flex-col items-center justify-center gap-3">
                                <img class="w-16 h-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80" />
                                <strong class="text-gray-900 text-xs font-medium">Emily</strong>
                            </div>
                        </div>
                        <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                            <div class="flex flex-col items-center justify-center gap-3">
                                <img class="w-16 h-16 rounded-full" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80" />
                                <strong class="text-gray-900 text-xs font-medium">Whitney</strong>
                            </div>
                        </div>
                        <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                            <div class="flex flex-col items-center justify-center gap-3">
                                <img class="w-16 h-16 rounded-full" src="https://images.unsplash.com/photo-1519345142560-3f2917c472ef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80" />
                                <strong class="text-gray-900 text-xs font-medium">David</strong>
                            </div>
                        </div>
                        <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                            <div class="flex flex-col items-center justify-center gap-3">
                                <img class="w-16 h-16 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80" />
                                <strong class="text-gray-900 text-xs font-medium">Kristin</strong>
                            </div>
                        </div>
                        <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                            <div class="flex flex-col items-center justify-center gap-3">
                                <img class="w-16 h-16 rounded-full" src="https://images.unsplash.com/photo-1605405748313-a416a1b84491?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80" />
                                <strong class="text-gray-900 text-xs font-medium">Sarah</strong>
                            </div>
                        </div>
                        <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                            <div class="flex flex-col items-center justify-center gap-3">
                                <img class="w-16 h-16 rounded-full" src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80" />
                                <strong class="text-gray-900 text-xs font-medium">Andrew</strong>
                            </div>
                        </div>
                        <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                            <div class="flex flex-col items-center justify-center gap-3">
                                <img class="w-16 h-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80" />
                                <strong class="text-gray-900 text-xs font-medium">Emily</strong>
                            </div>
                        </div>
                        <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                            <div class="flex flex-col items-center justify-center gap-3">
                                <img class="w-16 h-16 rounded-full" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80" />
                                <strong class="text-gray-900 text-xs font-medium">Whitney</strong>
                            </div>
                        </div>
                        <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                            <div class="flex flex-col items-center justify-center gap-3">
                                <img class="w-16 h-16 rounded-full" src="https://images.unsplash.com/photo-1519345142560-3f2917c472ef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80" />
                                <strong class="text-gray-900 text-xs font-medium">David</strong>
                            </div>
                        </div>
                        <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                            <div class="flex flex-col items-center justify-center gap-3">
                                <img class="w-16 h-16 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80" />
                                <strong class="text-gray-900 text-xs font-medium">Kristin</strong>
                            </div>
                        </div>
                        <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                            <div class="flex flex-col items-center justify-center gap-3">
                                <img class="w-16 h-16 rounded-full" src="https://images.unsplash.com/photo-1605405748313-a416a1b84491?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80" />
                                <strong class="text-gray-900 text-xs font-medium">Sarah</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 col-span-12 mt-6">
            <div class="col-span-4 ">
                <div class="container">
                    <div class="month">
                        <div class="ulcalendar">
                            <div class="prev licalendar">&#10094;</div>
                            <div class="next licalendar">&#10095;</div>
                            <div class="licalendar" style="text-align:center ">
                                Tháng 5<br>
                                <span style="font-size:18px">2017</span>
                            </div>
                        </div>
                    </div>

                    <div class="ulcalendar weekdays">
                        <div class="licalendar">Thứ 2</div>
                        <div class="licalendar">Thứ 3</div>
                        <div class="licalendar">Thứ 4</div>
                        <div class="licalendar">Thứ 5</div>
                        <div class="licalendar">Thứ 6</div>
                        <div class="licalendar">Thứ 7</div>
                        <div class="licalendar">CN</div>
                    </div>

                    <div class="ulcalendar days">
                        <div class="licalendar">1</div>
                        <div class="licalendar">2</div>
                        <div class="licalendar">3</div>
                        <div class="licalendar">4</div>
                        <div class="licalendar">5</div>
                        <div class="licalendar">6</div>
                        <div class="licalendar">7</div>
                        <div class="licalendar">8</div>
                        <div class="licalendar">9</div>
                        <div class="licalendar">10</div>
                        <div class="licalendar">11</div>
                        <div class="licalendar">12</div>
                        <div class="licalendar">13</div>
                        <div class="licalendar">14</div>
                        <div class="licalendar">15</div>
                        <div class="licalendar">16</div>
                        <div class="licalendar">17</div>
                        <div class="licalendar">18</div>
                        <div class="licalendar">19</div>
                        <div class="licalendar">20</div>
                        <div class="licalendar">21</div>
                        <div class="licalendar">22</div>
                        <div class="licalendar">23</div>
                        <div class="licalendar"><span class="active">24</span></div>
                        <div class="licalendar">25</div>
                        <div class="licalendar">26</div>
                        <div class="licalendar">27</div>
                        <div class="licalendar">28</div>
                        <div class="licalendar">29</div>
                        <div class="licalendar">30</div>
                        <div class="licalendar">31</div>
                    </div>
                </div>
            </div>

            <div class="col-span-4 grid grid-cols-12 pl-4">
                @if($dsVideo)
                <div class="col-span-12 grid grid-cols-12">
                    <div class="col-span-12 mr-2">
                        <div class="hinhanh-img overflow-hidden relative">
                            <a href="index2.html">
                                <img src="/storage/{{ $dsVideo[0]->thumbnail }}" alt="">

                                <i class="far fa-play-circle absolute text-3xl text-yellow-600" style="top: 44%; right: 43%;"></i>
                            </a>
                        </div>
                        <div class="text-justify py-4">
                            <p class="text-blue-800">{{ $dsVideo[0]->name }}</p>
                        </div>
                    </div>
                </div>
                @endif
                @foreach($dsVideo as $ds)
                @if($ds != $dsVideo[0])
                <div class="col-span-12 grid grid-cols-12 px-auto">
                    <div class="col-span-4 mr-4">
                        <div class="hinhanh-img overflow-hidden relative">
                            <a href="index2.html">
                                <img src="/storage/{{ $ds->thumbnail}}" alt="">

                                <i class="far fa-play-circle absolute text-2xl text-blue-700" style="top: 23%; right: 37%;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-span-8 ">
                        <p> {{ $ds->name}} </p>
                    </div>

                </div>
                @endif
                @endforeach
                <div class="text-right col-span-12"> <span class="text-blue-700" style="border-bottom: solid 1px blue"><a href="/video"> Xem thêm </a></span> </div>
            </div>
            <div class="col-span-4 grid grid-cols-12 pl-4">
                <!-- <div class="col-span-12">
                    <div class="holder">
                        <div class="audio green-audio-player">
                            <div class="loading">
                                <div class="spinner"></div>
                            </div>
                            <div class="play-pause-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                                    <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0" class="play-pause-icon" id="playPause" />
                                </svg>
                            </div>

                            <div class="controls">
                                <span class="current-time">0:00</span>
                                <div class="slider" data-direction="horizontal">
                                    <div class="progress">
                                        <div class="pin" id="progress-pin" data-method="rewind"></div>
                                    </div>
                                </div>
                                <span class="total-time">0:00</span>
                            </div>

                            <div class="volume">
                                <div class="volume-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="#566574" fill-rule="evenodd" d="M14.667 0v2.747c3.853 1.146 6.666 4.72 6.666 8.946 0 4.227-2.813 7.787-6.666 8.934v2.76C20 22.173 24 17.4 24 11.693 24 5.987 20 1.213 14.667 0zM18 11.693c0-2.36-1.333-4.386-3.333-5.373v10.707c2-.947 3.333-2.987 3.333-5.334zm-18-4v8h5.333L12 22.36V1.027L5.333 7.693H0z" id="speaker" />
                                    </svg>
                                </div>
                                <div class="volume-controls hidden">
                                    <div class="slider" data-direction="vertical">
                                        <div class="progress">
                                            <div class="pin" id="volume-pin" data-method="changeVolume"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <audio crossorigin>
                                <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/355309/Swing_Jazz_Drum.mp3" type="audio/mpeg">
                            </audio>

                        </div>

                    </div>
                </div>
                -->
                <div class="col-span-12 mb-4">
                    @foreach($dsAudio as $ds)
                    <p class="hinhanh-content font-medium text-justify mx-auto mt-4 w-full"><audio src="/storage/{{ $ds->linkmp3 }}" controls></audio></p>
                    @endforeach
                </div>



            </div>
        </div>


        <div class="grid grid-cols-12 col-span-12 mt-6">
            <div class="col-span-12 text-blue-800 text-xl">TIN TỨC HOẠT ĐỘNG CÂU LẠC BÔ</div>
            <div class="sm:col-span-7 col-span-12 sm:mr-8 mx-auto text-white pl-4 pr-6 text-justify sm:mb-2 mb-8" style="background-image: url(./assets/images/avatar1637805829239-1637805829581200812199.jpg); width: 100%;">
                <div class="owl-carousel owl-theme">
                    @foreach($dsTintucngang as $ds)
                    <div class="item ">
                        <div class="">
                            <div class="pl-2" style="background-image:url('/storage/{{ $ds->thumbnail }}'); background-size: cover; height:320px; padding-top:270px">
                                <div class="" style="background-color:rgba(0, 0, 0, 0.103);">
                                    <div class="text-white font-bold text-xs mt-2 hover:text-blue-800">
                                    {{ $ds->title }}
                                    </div>
                                    <div class="text-xs text-white">
                                    {{ $ds->created_at->format('d/m/Y') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>

            <div class="sm:col-span-5 col-span-12 grid grid-cols-12 mx-auto ">
            @foreach($dsTintuccot as $ds)
                <div class="col-span-5 img-news-small ">
                    <a href=" ">
                    <img src="/storage/{{ $ds->thumbnail }}" style="height: 93px; object-fit: cover;" alt="">
                    </a>
                </div>
                <div class="col-span-7 border-b-2 border-gray-100 ml-2">
                    <p class="col-span-12 text-justify text-base  hover:text-blue-800">{{ $ds->title }}</p>
                    <p class="text-xs mt-2 hover:text-blue-800">{{ $ds->created_at->format('d/m/Y') }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>
<script>
    var audioPlayer = document.querySelector('.green-audio-player');
    var playPause = audioPlayer.querySelector('#playPause');
    var playpauseBtn = audioPlayer.querySelector('.play-pause-btn');
    var loading = audioPlayer.querySelector('.loading');
    var progress = audioPlayer.querySelector('.progress');
    var sliders = audioPlayer.querySelectorAll('.slider');
    var volumeBtn = audioPlayer.querySelector('.volume-btn');
    var volumeControls = audioPlayer.querySelector('.volume-controls');
    var volumeProgress = volumeControls.querySelector('.slider .progress');
    var player = audioPlayer.querySelector('audio');
    var currentTime = audioPlayer.querySelector('.current-time');
    var totalTime = audioPlayer.querySelector('.total-time');
    var speaker = audioPlayer.querySelector('#speaker');

    var draggableClasses = ['pin'];
    var currentlyDragged = null;

    window.addEventListener('mousedown', function(event) {

        if (!isDraggable(event.target)) return false;

        currentlyDragged = event.target;
        let handleMethod = currentlyDragged.dataset.method;

        this.addEventListener('mousemove', window[handleMethod], false);

        window.addEventListener('mouseup', () => {
            currentlyDragged = false;
            window.removeEventListener('mousemove', window[handleMethod], false);
        }, false);
    });

    playpauseBtn.addEventListener('click', togglePlay);
    player.addEventListener('timeupdate', updateProgress);
    player.addEventListener('volumechange', updateVolume);
    player.addEventListener('loadedmetadata', () => {
        totalTime.textContent = formatTime(player.duration);
    });
    player.addEventListener('canplay', makePlay);
    player.addEventListener('ended', function() {
        playPause.attributes.d.value = "M18 12L0 24V0";
        player.currentTime = 0;
    });

    volumeBtn.addEventListener('click', () => {
        volumeBtn.classList.toggle('open');
        volumeControls.classList.toggle('hidden');
    });

    window.addEventListener('resize', directionAware);

    sliders.forEach(slider => {
        let pin = slider.querySelector('.pin');
        slider.addEventListener('click', window[pin.dataset.method]);
    });

    directionAware();

    function isDraggable(el) {
        let canDrag = false;
        let classes = Array.from(el.classList);
        draggableClasses.forEach(draggable => {
            if (classes.indexOf(draggable) !== -1)
                canDrag = true;
        });
        return canDrag;
    }

    function inRange(event) {
        let rangeBox = getRangeBox(event);
        let rect = rangeBox.getBoundingClientRect();
        let direction = rangeBox.dataset.direction;
        if (direction == 'horizontal') {
            var min = rangeBox.offsetLeft;
            var max = min + rangeBox.offsetWidth;
            if (event.clientX < min || event.clientX > max) return false;
        } else {
            var min = rect.top;
            var max = min + rangeBox.offsetHeight;
            if (event.clientY < min || event.clientY > max) return false;
        }
        return true;
    }

    function updateProgress() {
        var current = player.currentTime;
        var percent = current / player.duration * 100;
        progress.style.width = percent + '%';

        currentTime.textContent = formatTime(current);
    }

    function updateVolume() {
        volumeProgress.style.height = player.volume * 100 + '%';
        if (player.volume >= 0.5) {
            speaker.attributes.d.value = 'M14.667 0v2.747c3.853 1.146 6.666 4.72 6.666 8.946 0 4.227-2.813 7.787-6.666 8.934v2.76C20 22.173 24 17.4 24 11.693 24 5.987 20 1.213 14.667 0zM18 11.693c0-2.36-1.333-4.386-3.333-5.373v10.707c2-.947 3.333-2.987 3.333-5.334zm-18-4v8h5.333L12 22.36V1.027L5.333 7.693H0z';
        } else if (player.volume < 0.5 && player.volume > 0.05) {
            speaker.attributes.d.value = 'M0 7.667v8h5.333L12 22.333V1L5.333 7.667M17.333 11.373C17.333 9.013 16 6.987 14 6v10.707c2-.947 3.333-2.987 3.333-5.334z';
        } else if (player.volume <= 0.05) {
            speaker.attributes.d.value = 'M0 7.667v8h5.333L12 22.333V1L5.333 7.667';
        }
    }

    function getRangeBox(event) {
        let rangeBox = event.target;
        let el = currentlyDragged;
        if (event.type == 'click' && isDraggable(event.target)) {
            rangeBox = event.target.parentElement.parentElement;
        }
        if (event.type == 'mousemove') {
            rangeBox = el.parentElement.parentElement;
        }
        return rangeBox;
    }

    function getCoefficient(event) {
        let slider = getRangeBox(event);
        let rect = slider.getBoundingClientRect();
        let K = 0;
        if (slider.dataset.direction == 'horizontal') {

            let offsetX = event.clientX - slider.offsetLeft;
            let width = slider.clientWidth;
            K = offsetX / width;

        } else if (slider.dataset.direction == 'vertical') {

            let height = slider.clientHeight;
            var offsetY = event.clientY - rect.top;
            K = 1 - offsetY / height;

        }
        return K;
    }

    function rewind(event) {
        if (inRange(event)) {
            player.currentTime = player.duration * getCoefficient(event);
        }
    }

    function changeVolume(event) {
        if (inRange(event)) {
            player.volume = getCoefficient(event);
        }
    }

    function formatTime(time) {
        var min = Math.floor(time / 60);
        var sec = Math.floor(time % 60);
        return min + ':' + (sec < 10 ? '0' + sec : sec);
    }

    function togglePlay() {
        if (player.paused) {
            playPause.attributes.d.value = "M0 0h6v24H0zM12 0h6v24h-6z";
            player.play();
        } else {
            playPause.attributes.d.value = "M18 12L0 24V0";
            player.pause();
        }
    }

    function makePlay() {
        playpauseBtn.style.display = 'block';
        loading.style.display = 'none';
    }

    function directionAware() {
        if (window.innerHeight < 250) {
            volumeControls.style.bottom = '-54px';
            volumeControls.style.left = '54px';
        } else if (audioPlayer.offsetTop < 154) {
            volumeControls.style.bottom = '-164px';
            volumeControls.style.left = '-3px';
        } else {
            volumeControls.style.bottom = '52px';
            volumeControls.style.left = '-3px';
        }
    }
</script>
@endsection
