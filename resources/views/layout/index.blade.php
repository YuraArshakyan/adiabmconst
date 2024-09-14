<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>      
    
    <script src="/assets/libs/gsap/gsap.min.js" defer></script>
    <script src="/assets/libs/gsap/ScrollTrigger.min.js" defer></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/template.css">
    <title>@yield('title') - {{ config('app.name') }}</title>
</head>

{{-- <div class="preloader_under_layer">

</div> 
{{-- <div class="preloader1 active">
    <div class = "preloader_svg w-100 h-100 d-flex align-items-center justify-content-center">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="330" height="247">
            <path class="layer1" d="M0 0 C7.18584121 -0.05107759 14.37163488 -0.08589083 21.55761719 -0.10986328 C23.99773915 -0.11986643 26.4378493 -0.13347322 28.87792969 -0.15087891 C32.40302463 -0.17537875 35.92795988 -0.18654033 39.453125 -0.1953125 C41.06637665 -0.21079636 41.06637665 -0.21079636 42.71221924 -0.22659302 C55.59935298 -0.22846459 67.86129409 1.35905746 78 10 C78 10.66 78 11.32 78 12 C78.66 12 79.32 12 80 12 C86.38589133 19.80883451 89.13415609 27.95048944 89 38 C88.05582826 44.42293699 86.60766806 50.71118084 85 57 C85.7425 57.556875 86.485 58.11375 87.25 58.6875 C89.9341211 60.94460184 91.97240993 63.14635471 94 66 C94 66.66 94 67.32 94 68 C94.66 68 95.32 68 96 68 C102.64356789 79.96856506 104.57806376 92.1432427 101.02001953 105.32177734 C98.95199708 112.00910538 95.58679971 118.88618486 90.22265625 123.54296875 C89.61744141 124.26419922 89.61744141 124.26419922 89 125 C89.76004229 129.85828405 92.57020467 133.96089838 94.9375 138.1875 C95.62102539 139.43563477 95.62102539 139.43563477 96.31835938 140.70898438 C96.97868164 141.89524414 96.97868164 141.89524414 97.65234375 143.10546875 C98.05445068 143.82887451 98.45655762 144.55228027 98.87084961 145.29760742 C99.90146833 147.15830953 99.90146833 147.15830953 102 148 C113.49279912 128.2332999 113.49279912 128.2332999 123.921875 107.8984375 C125 106 125 106 127 105 C127.65555119 102.47266765 127.65555119 102.47266765 128 100 C128.66 100 129.32 100 130 100 C130 98.68 130 97.36 130 96 C130.66 96 131.32 96 132 96 C132.268125 95.2575 132.53625 94.515 132.8125 93.75 C133.96973908 91.07007792 135.01741197 89.1350948 137 87 C139.84481141 86.06251831 142.459429 85.87163679 145.44140625 85.8671875 C146.27220703 85.86589844 147.10300781 85.86460938 147.95898438 85.86328125 C148.81814453 85.86714844 149.67730469 85.87101562 150.5625 85.875 C151.85704102 85.86919922 151.85704102 85.86919922 153.17773438 85.86328125 C154.00724609 85.86457031 154.83675781 85.86585937 155.69140625 85.8671875 C156.44623291 85.86831543 157.20105957 85.86944336 157.97875977 85.87060547 C160 86 160 86 163 87 C163 133.53 163 180.06 163 228 C159 229 159 229 144 228 C143.67 193.02 143.34 158.04 143 122 C141.02 125.63 139.04 129.26 137 133 C136.34 133.33 135.68 133.66 135 134 C134.26924352 136.3140622 133.59861742 138.64828869 133 141 C132.34 141 131.68 141 131 141 C130.58814453 142.08087891 130.58814453 142.08087891 130.16796875 143.18359375 C129.03068622 145.92600412 127.7437074 148.46279999 126.3125 151.0625 C125.79042969 152.01125 125.26835937 152.96 124.73046875 153.9375 C122.32875008 158.18794568 119.83444696 162.38162399 117.3203125 166.56640625 C115.84104203 168.83154346 115.84104203 168.83154346 116 171 C115.34 171.33 114.68 171.66 114 172 C113.02545971 173.59096637 112.11972217 175.22439825 111.25 176.875 C110.72664062 177.85855469 110.20328125 178.84210938 109.6640625 179.85546875 C108.84035156 181.41201172 108.84035156 181.41201172 108 183 C106.87784712 185.06405043 105.75299527 187.12663661 104.625 189.1875 C104.12226563 190.10917969 103.61953125 191.03085938 103.1015625 191.98046875 C102.73804688 192.64691406 102.37453125 193.31335938 102 194 C101.34 194 100.68 194 100 194 C97 189.61538462 97 189.61538462 97 187 C96.34 186.67 95.68 186.34 95 186 C93.83691557 183.99131351 92.74726347 181.94006373 91.6875 179.875 C82.01965942 161.32918256 71.44852171 143.20265765 60.76171875 125.2265625 C59.79685547 123.59847656 59.79685547 123.59847656 58.8125 121.9375 C58.26207031 121.01839844 57.71164063 120.09929687 57.14453125 119.15234375 C56 117 56 117 56 115 C55.34 114.67 54.68 114.34 54 114 C52.68562348 111.70576171 51.45145139 109.4148572 50.25 107.0625 C47.37853732 101.52152075 44.35592766 96.17996225 40.93359375 90.953125 C40 89 40 89 41 86 C44.56206722 85.85432593 48.12336551 85.76580804 51.6875 85.6875 C52.69490234 85.64560547 53.70230469 85.60371094 54.74023438 85.56054688 C62.21376503 85.43722129 62.21376503 85.43722129 65.96875 88.125 C68.08561212 91.12117407 70.01854679 94.11152467 71.8125 97.3125 C72.41707031 98.38113281 73.02164063 99.44976562 73.64453125 100.55078125 C74.09183594 101.35902344 74.53914062 102.16726562 75 103 C78.42690436 97.88236829 78.83515633 94.02964513 78 88 C76.43169051 83.29507153 74.0444663 78.9513673 70 76 C63.49311044 73.11675919 57.42649652 72.55549239 50.3828125 72.6015625 C49.40384003 72.59869232 48.42486755 72.59582214 47.41622925 72.59286499 C45.36406876 72.59083674 43.31188839 72.59627916 41.25976562 72.60888672 C38.11284736 72.62506247 34.96719315 72.60894247 31.8203125 72.58984375 C29.82030967 72.59182437 27.82030762 72.59566427 25.8203125 72.6015625 C24.87970978 72.59548981 23.93910706 72.58941711 22.97000122 72.5831604 C22.0983432 72.59261688 21.22668518 72.60207336 20.32861328 72.61181641 C19.56300079 72.61420319 18.79738831 72.61658997 18.00857544 72.61904907 C15.44416519 73.10542088 14.61276567 73.98358835 13 76 C11.81358905 78.23535363 10.73210778 80.44941219 9.6875 82.75 C9.3562915 83.46518799 9.02508301 84.18037598 8.68383789 84.91723633 C6.29265806 90.10560556 3.95390105 95.31777464 1.609375 100.52734375 C1.30888748 101.19450409 1.00839996 101.86166443 0.69880676 102.54904175 C-0.80973083 105.89929641 -2.31462419 109.25108247 -3.81176758 112.60644531 C-7.185761 120.14268876 -10.74054041 127.55272602 -14.46655273 134.92114258 C-16.28313508 138.56847898 -17.91460656 142.24682369 -19.5 146 C-22.19879729 152.29642872 -25.14985026 158.40137898 -28.25 164.51171875 C-32.6653076 173.31276716 -36.71059826 182.27926521 -40.625 191.3125 C-43.22714035 197.314799 -46.00839846 203.182997 -49 209 C-50.10627335 211.20727873 -51.21039383 213.41563762 -52.3125 215.625 C-53.20833333 217.41666667 -54.10416667 219.20833333 -55 221 C-58.77046829 220.51877614 -61.45615374 220.08893352 -64.4375 217.6875 C-67.80702471 215.10018639 -71.27990803 213.0498466 -75 211 C-74.40261053 209.26848028 -73.79676033 207.53987853 -73.1875 205.8125 C-72.85105469 204.84957031 -72.51460937 203.88664063 -72.16796875 202.89453125 C-71 200 -71 200 -69.36328125 197.32421875 C-67.74702865 195.01780592 -67.74702865 195.01780592 -68 192 C-67.34 192 -66.68 192 -66 192 C-65.80664062 191.33613281 -65.61328125 190.67226562 -65.4140625 189.98828125 C-62.82776801 181.21792619 -62.82776801 181.21792619 -61 177 C-60.34 177 -59.68 177 -59 177 C-58.91363281 176.33484375 -58.82726562 175.6696875 -58.73828125 174.984375 C-57.77190902 171.07798145 -56.04010398 167.80486138 -54.1875 164.25 C-53.45552928 162.81847533 -52.72504713 161.3861885 -51.99609375 159.953125 C-51.64788574 159.26927734 -51.29967773 158.58542969 -50.94091797 157.88085938 C-49.47643291 154.95340922 -48.1653985 151.96802685 -46.875 148.9609375 C-45.62087949 146.15036385 -44.18580841 143.43962648 -42.734375 140.7265625 C-41.80429743 138.85259958 -41.80429743 138.85259958 -42 136 C-41.34 136 -40.68 136 -40 136 C-39.81824219 135.43152344 -39.63648438 134.86304688 -39.44921875 134.27734375 C-37.86057224 129.39734755 -36.21949293 124.63198525 -34 120 C-33.34 119.67 -32.68 119.34 -32 119 C-31.22637104 117.1878364 -31.22637104 117.1878364 -30.6171875 114.99609375 C-29.10127099 110.18681533 -27.20355325 105.65222404 -25.125 101.0625 C-24.77276367 100.27762207 -24.42052734 99.49274414 -24.05761719 98.68408203 C-21.16064599 92.26746343 -18.08090398 85.96395151 -14.80859375 79.73046875 C-12.60683977 75.58634069 -12.60683977 75.58634069 -12 71 C-11.34 71 -10.68 71 -10 71 C-9.86722656 70.43796875 -9.73445313 69.8759375 -9.59765625 69.296875 C-8.97562889 66.90633847 -8.22884959 64.58964225 -7.4375 62.25 C-7.16808594 61.45078125 -6.89867188 60.6515625 -6.62109375 59.828125 C-6.41613281 59.22484375 -6.21117188 58.6215625 -6 58 C-5.34 58 -4.68 58 -4 58 C-3.82984375 57.443125 -3.6596875 56.88625 -3.484375 56.3125 C-1.76684063 50.90409391 0.35342255 46.01937104 3 41 C5.79872437 43.52788007 7.45773019 45.20411134 8 49 C8.98500488 48.83483887 9.97000977 48.66967773 10.98486328 48.49951172 C15.07606616 47.91758278 19.118349 47.9247051 23.2421875 48.0078125 C24.81900397 48.02533016 26.3958273 48.04223831 27.97265625 48.05859375 C30.42353873 48.08946869 32.87406674 48.12498233 35.32470703 48.17138672 C49.56705483 48.63843735 49.56705483 48.63843735 62.5625 43.3125 C64.67630169 39.91203641 64.69894348 36.82579591 64 33 C62.75 29.5 62.75 29.5 60 27 C53.39251993 24.51138506 46.14144683 24.66268382 39.18359375 24.5859375 C38.08652603 24.56657135 36.98945831 24.5472052 35.85914612 24.5272522 C32.38534099 24.46789209 28.91150194 24.42124616 25.4375 24.375 C23.06964771 24.3367801 20.70180872 24.29772608 18.33398438 24.2578125 C12.55610848 24.16222677 6.77815117 24.07705417 1 24 C-0.25248502 21.49502996 -0.11374406 19.79146726 -0.09765625 16.9921875 C-0.09282227 15.51298828 -0.09282227 15.51298828 -0.08789062 14.00390625 C-0.07532227 12.45509766 -0.07532227 12.45509766 -0.0625 10.875 C-0.05798828 9.83472656 -0.05347656 8.79445313 -0.04882812 7.72265625 C-0.03701952 5.14838038 -0.02055075 2.57421854 0 0 Z " fill="#000000" />
            <path class="layer2" d="M0 0 C1.9524626 2.5168872 3.64089704 5.00555329 5.13671875 7.81640625 C5.54043701 8.56607666 5.94415527 9.31574707 6.36010742 10.08813477 C6.79814697 10.90467529 7.23618652 11.72121582 7.6875 12.5625 C13.78896739 23.79057041 20.30577259 34.76271037 26.85827637 45.73100281 C29.29366331 49.80907031 31.71359002 53.89599588 34.125 57.98828125 C40.34159654 68.53231488 46.59762784 79.04338766 53.0625 89.4375 C53.59270752 90.29335693 54.12291504 91.14921387 54.66918945 92.03100586 C56.89141424 95.61698947 59.12252975 99.19533894 61.39453125 102.75 C62.04808594 103.801875 62.70164062 104.85375 63.375 105.9375 C63.91898437 106.79214844 64.46296875 107.64679688 65.0234375 108.52734375 C66.33457848 111.8471527 65.99809349 113.58660668 65 117 C63.29296875 120.18359375 63.29296875 120.18359375 61.1875 123.4375 C60.46145685 124.57502162 59.73618932 125.71303869 59.01171875 126.8515625 C58.01591797 128.41003906 58.01591797 128.41003906 57 130 C55.63079954 132.31594788 54.31125229 134.65067298 53 137 C48.11223178 132.67932091 45.17467139 127.6192409 41.9375 122 C38.87038035 116.71582382 35.85870002 111.74916926 32 107 C31.02997125 105.35747232 30.06346597 103.71236039 29.13867188 102.04394531 C26.75948669 97.77324669 24.23646028 93.5838276 21.75 89.375 C20.88556274 87.91066528 20.88556274 87.91066528 20.00366211 86.41674805 C16.90674381 81.18258719 13.77515567 75.9763624 10.5625 70.8125 C7.15186953 65.32362972 4.02155016 59.71118761 1 54 C0.60167969 54.66386719 0.20335937 55.32773438 -0.20703125 56.01171875 C-1.8046875 58.67447917 -3.40234375 61.33723958 -5 64 C-5.49886719 64.91394531 -5.99773437 65.82789063 -6.51171875 66.76953125 C-8 69 -8 69 -11 70 C-12.45741472 70.09185751 -13.9186012 70.13066657 -15.37890625 70.1328125 C-16.21744141 70.13410156 -17.05597656 70.13539063 -17.91992188 70.13671875 C-19.22799805 70.13091797 -19.22799805 70.13091797 -20.5625 70.125 C-21.87637695 70.13080078 -21.87637695 70.13080078 -23.21679688 70.13671875 C-24.05404297 70.13542969 -24.89128906 70.13414062 -25.75390625 70.1328125 C-26.52033447 70.13168457 -27.2867627 70.13055664 -28.07641602 70.12939453 C-30 70 -30 70 -32 69 C-29.96074195 62.31576529 -27.30372844 56.13172701 -24.3046875 49.8203125 C-22.94249496 47.01299169 -22.94249496 47.01299169 -22 44 C-21.34 44 -20.68 44 -20 44 C-19.61457031 42.75992188 -19.22914062 41.51984375 -18.83203125 40.2421875 C-16.86356268 34.34485402 -14.2987502 28.76074055 -11.6875 23.125 C-11.22666016 22.11308594 -10.76582031 21.10117188 -10.29101562 20.05859375 C-7.13805936 13.20891686 -3.69352154 6.57328498 0 0 Z " fill="#000000" transform="translate(147,102)"/>
        </svg>
        <div class="preloader_title text-center">
            <h3>
                Studio ABM Builders
            </h3>
        </div>
        
    </div>
    <div class="progress_bar d-flex justify-content-center">
        <div class="progress" style="width: 300px">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
        </div>
    </div>
</div> --}}
<body>
    <div class="main_menue">
        {{-- @include('layout.headerTop') --}}
    </div>
    <div class="main-content">
        <div class="page">
            @yield('content')
        </div>
    </div>
    {{-- @include('layout.footer') --}}
</body>
<!--scripts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="assets/js/core.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<!--scriptsEnd-->
</html>
