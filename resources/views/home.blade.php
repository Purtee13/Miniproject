@extends('layouts.app')

@section('content')
<div class="container">

    <link rel="stylesheet" href="{{ asset('css/hyperlink.css') }}">

    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}

    <!-- <table width="95%">
                    <tr>
                    <td><font size=4 color=Blue><b>Fort Names :</b></font>&nbsp;</td>
                    <td><A href="Trekking-in-Maharashtra.html">Alphabetically</A></td>
                    <td><A href="Trekking-in-Maharashtra-Sorted-By-Range.html">RangeWise</A></td>
                    <td><A href="Trekking-in-Maharashtra-Sorted-By-District.html">DistrictWise</A></td>
                    <td><A href="Trekking-in-Maharashtra-By-Fort-Category-Type.html">CategoryWise</A></td>
                    <td><A href="Trekking-in-Maharashtra-By-Difficulty-Level-Grade.html">GradeWise</A></td>
                    </tr>
                </table> -->

    <font size="4" face="Verdana, Arial, Helvetica, sans-serif" color="blue"
      >Alphabetically</font
    ><br /><br />
    <table border="0" align="center" width="90%" bgcolor="#ffffff">
      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>A</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="https://en.wikipedia.org/wiki/Achala_Fort">Achala Fort</a>
            </td>

            <td width="20%">
              <a href="">Agashi Fort</a>
            </td>

            <td width="20%">
              <a href="">Ahmednagar Fort</a>
            </td>

            <td width="20%">
              <a href="">Ahivant Fort</a>
            </td>

            <tr>
              <td width="20%">
                <a href="">Ajinkyatara</a>
              </td>

              <td width="20%">
                <a href="">Akola Fort</a>
              </td>

              <td width="20%">
                <a href="">Akluj Fort</a>
              </td>

              <td width="20%">
                <a href="">Alang Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Ambolgad</a>
              </td>

              <td width="20%">
                <a href="">Anjaneri</a>
              </td>

              <td width="20%">
                <a href="">Anjanvel Fort</a>
              </td>

              <td width="20%">
                <a href="">Ankai Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Antur Fort</a>
              </td>

              <td width="20%">
                <a href="">Arnala Fort</a>
              </td>

              <td width="20%">
                <a href="">Asheri Fort</a>
              </td>

              <td width="20%">
                <a href="">Asawa Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Avchitgad</a>
              </td>

              <td width="20%">
                <a href="">Aurangabad Fort</a>
              </td>

              <td width="20%">
                <a href="">Avandha Fort</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>B</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Bahadurgad</a>
            </td>

            <td width="20%">
              <a href="">Balapur Fort</a>
            </td>

            <td width="20%">
              <a href="">Ballarpur Fort</a>
            </td>

            <td width="20%">
              <a href="">Bandra Fort</a>
            </td>

            <tr>
              <td width="20%">
                <a href="">Bankot Fort</a>
              </td>

              <td width="20%">
                <a href="">Bahadur Fort</a>
              </td>

              <td width="20%">
                <a href="">Belapur Fort</a>
              </td>

              <td width="20%">
                <a href="">Birwadi Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Bitangad</a>
              </td>

              <td width="20%">
                <a href="">Bhagwantgad</a>
              </td>

              <td width="20%">
                <a href="">Bhairavgad</a>
              </td>

              <td width="20%">
                <a href="">Bhamer</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Bharatgad</a>
              </td>

              <td width="20%">
                <a href="">Bhaskargad</a>
              </td>

              <td width="20%">
                <a href="">Bhavangad Fort</a>
              </td>

              <td width="20%">
                <a href="">Bhorgiri Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Bhudargad Fort</a>
              </td>

              <td width="20%">
                <a href="">Bhupatgad Fort</a>
              </td>

              <td width="20%">
                <a href="">Bhushangad</a>
              </td>

              <td width="20%">
                <a href="">Bombay Castle</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>C</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Chandan Fort</a>
            </td>

            <td width="20%">
              <a href="">Chandragad</a>
            </td>

            <td width="20%">
              <a href="">Chandwad Fort</a>
            </td>

            <td width="20%">
              <a href="">Chauler Fort</a>
            </td>

            <tr>
              <td width="20%">
                <a href="">Chavand Fort</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>D</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Dategad</a>
            </td>

            <td width="20%">
              <a href="">Dativare Fort</a>
            </td>

            <td width="20%">
              <a href="">Daulatabad Fort</a>
            </td>

            <td width="20%">
              <a href="">Dermal Fort</a>
            </td>

            <tr>
              <td width="20%">
                <a href="">Devgad Fort</a>
              </td>

              <td width="20%">
                <a href="">Dhodap</a>
              </td>

              <td width="20%">
                <a href="">Dhunda Fort</a>
              </td>

              <td width="20%">
                <a href="">Dongri Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Dronagiri Fort</a>
              </td>

              <td width="20%">
                <a href="">Durgabhandar</a>
              </td>

              <td width="20%">
                <a href="">Durgadi Fort</a>
              </td>

              <td width="20%">
                <a href="">Dubergad Fort</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>F</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Fattegad</a>
            </td>

            <td width="20%">
              <a href="">Fort George</a>
            </td>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>G</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Gagangad</a>
            </td>

            <td width="20%">
              <a href="">Galna</a>
            </td>

            <td width="20%">
              <a href="">Gambhirgad</a>
            </td>

            <td width="20%">
              <a href="">Gawilghur</a>
            </td>

            <tr>
              <td width="20%">
                <a href="">Ghangad</a>
              </td>

              <td width="20%">
                <a href="">Ghargad</a>
              </td>

              <td width="20%">
                <a href="">Ghodbunder Fort</a>
              </td>

              <td width="20%">
                <a href="">Ghosale gad</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Goa Fort</a>
              </td>

              <td width="20%">
                <a href="">Gondhanapur Fort</a>
              </td>

              <td width="20%">
                <a href="">Gorakhgad</a>
              </td>

              <td width="20%">
                <a href="">Gowalkot</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Gunvantgad</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>H</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Hadsar</a>
            </td>

            <td width="20%">
              <a href="">Hargad</a>
            </td>

            <td width="20%">
              <a href="">Harihar Fort</a>
            </td>

            <td width="20%">
              <a href="">Harishchandragad</a>
            </td>

            <tr>
              <td width="20%">
                <a href="">Hatgad</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>I</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Irshalgad</a>
            </td>

            <td width="20%">
              <a href="">Indori Fort</a>
            </td>

            <td width="20%">
              <a href="">Indrai Fort</a>
            </td>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>J</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Jadhavgad</a>
            </td>

            <td width="20%">
              <a href="">Jaigad Fort</a>
            </td>

            <td width="20%">
              <a href="">Jamgaon Fort</a>
            </td>

            <td width="20%">
              <a href="">Jangali Jayagad</a>
            </td>

            <tr>
              <td width="20%">
                <a href="">Janjira Fort</a>
              </td>

              <td width="20%">
                <a href="">Javlya Fort</a>
              </td>

              <td width="20%">
                <a href="">Jivdhan</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>K</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Kalanandigad</a>
            </td>

            <td width="20%">
              <a href="">Kalavantin Durg</a>
            </td>

            <td width="20%">
              <a href="">Kaladgad</a>
            </td>

            <td width="20%">
              <a href="">Kaldurg Fort</a>
            </td>

            <tr>
              <td width="20%">
                <a href="">Kalyangad</a>
              </td>

              <td width="20%">
                <a href="">Kamalgad</a>
              </td>

              <td width="20%">
                <a href="">Kamandurg Fort</a>
              </td>

              <td width="20%">
                <a href="">Kandhar Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Kanchana Fort</a>
              </td>

              <td width="20%">
                <a href="">Kanhera Fort</a>
              </td>

              <td width="20%">
                <a href="">Kankrala</a>
              </td>

              <td width="20%">
                <a href="">Karnala Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Kavnai Fort</a>
              </td>

              <td width="20%">
                <a href="">Kelve Fort</a>
              </td>

              <td width="20%">
                <a href="">Kenjalgad</a>
              </td>

              <td width="20%">
                <a href="">Khanderi</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Kharda</a>
              </td>

              <td width="20%">
                <a href="">Kohoj Fort</a>
              </td>

              <td width="20%">
                <a href="">Kolaba Fort</a>
              </td>

              <td width="20%">
                <a href="">Koldher Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Konkan Diva Fort</a>
              </td>

              <td width="20%">
                <a href="">Korlai Fort</a>
              </td>

              <td width="20%">
                <a href="">Korigad</a>
              </td>

              <td width="20%">
                <a href="">Kothaligad</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Kulang Fort</a>
              </td>

              <td width="20%">
                <a href="">Kunjargad</a>
              </td>

              <td width="20%">
                <a href="">Kurdugad</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>L</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Laling Fort</a>
            </td>

            <td width="20%">
              <a href="">Lingana</a>
            </td>

            <td width="20%">
              <a href="">Lohagad</a>
            </td>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>M</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Machindragad</a>
            </td>

            <td width="20%">
              <a href="">Machnur Fort </a>
            </td>

            <td width="20%">
              <a href="">Madangad Fort</a>
            </td>

            <td width="20%">
              <a href="">Madh Fort</a>
            </td>

            <tr>
              <td width="20%">
                <a href="">Mailgad Fort</a>
              </td>

              <td width="20%">
                <a href="">Mahim Fort</a>
              </td>

              <td width="20%">
                <a href="">Mahimangad</a>
              </td>

              <td width="20%">
                <a href="">Mahipalgad</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Mahipatgad</a>
              </td>

              <td width="20%">
                <a href="">Mahur Fort</a>
              </td>

              <td width="20%">
                <a href="">Mahuli</a>
              </td>

              <td width="20%">
                <a href="">Makrandgad</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Malanggad</a>
              </td>

              <td width="20%">
                <a href="">Malegaon Fort</a>
              </td>

              <td width="20%">
                <a href="">Malhargad</a>
              </td>

              <td width="20%">
                <a href="">Manaranjan Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Mandangad Fort</a>
              </td>

              <td width="20%">
                <a href="">Mangad Fort</a>
              </td>

              <td width="20%">
                <a href="">Mangalgad</a>
              </td>

              <td width="20%">
                <a href="">Mangi-Tungi</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Manikgad</a>
              </td>

              <td width="20%">
                <a href="">Manjarsumbha Fort</a>
              </td>

              <td width="20%">
                <a href="">Manohar-Mansantoshgad</a>
              </td>

              <td width="20%">
                <a href="">Markanda Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Mazagon Fort</a>
              </td>

              <td width="20%">
                <a href="">Mohandar Fort</a>
              </td>

              <td width="20%">
                <a href="">Mohangad</a>
              </td>

              <td width="20%">
                <a href="">Mora Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Morgiri Fort</a>
              </td>

              <td width="20%">
                <a href="">Mrugagad</a>
              </td>

              <td width="20%">
                <a href="">Mulher</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>N</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Naldurg Fort</a>
            </td>

            <td width="20%">
              <a href="">Nanded Fort</a>
            </td>

            <td width="20%">
              <a href="">Nandoshi Fort</a>
            </td>

            <td width="20%">
              <a href="">Narayangad</a>
            </td>

            <tr>
              <td width="20%">
                <a href="">Narnala</a>
              </td>

              <td width="20%">
                <a href="">Narsinghgarh</a>
              </td>

              <td width="20%">
                <a href="">Nhavigad</a>
              </td>

              <td width="20%">
                <a href="">Nimgiri-Hanumantgad Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Nivati Fort</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>P</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Pabargad</a>
            </td>

            <td width="20%">
              <a href="">Padargad</a>
            </td>

            <td width="20%">
              <a href="">Padmadurg</a>
            </td>

            <td width="20%">
              <a href="">Palgad</a>
            </td>

            <tr>
              <td width="20%">
                <a href="">Pandavgad</a>
              </td>

              <td width="20%">
                <a href="">Panhala Fort</a>
              </td>

              <td width="20%">
                <a href="">Paranda Fort</a>
              </td>

              <td width="20%">
                <a href="">Pargadh</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Parola Fort</a>
              </td>

              <td width="20%">
                <a href="">Patta Fort</a>
              </td>

              <td width="20%">
                <a href="">Pavangad</a>
              </td>

              <td width="20%">
                <a href="">Pemgiri Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Pisola Fort</a>
              </td>

              <td width="20%">
                <a href="">Pimpalgaon Raja Fort</a>
              </td>

              <td width="20%">
                <a href="">Prabalgad</a>
              </td>

              <td width="20%">
                <a href="">Prachitgad</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Pratapgad</a>
              </td>

              <td width="20%">
                <a href="">Purandar Fort</a>
              </td>

              <td width="20%">
                <a href="">Purnagad</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>R</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Rangana Fort</a>
            </td>

            <td width="20%">
              <a href="">Raigad Fort</a>
            </td>

            <td width="20%">
              <a href="">Rajgad Fort</a>
            </td>

            <td width="20%">
              <a href="">Rajdher Fort</a>
            </td>

            <tr>
              <td width="20%">
                <a href="">Ramshej</a>
              </td>

              <td width="20%">
                <a href="">Ramtek</a>
              </td>

              <td width="20%">
                <a href="">Rasalgad</a>
              </td>

              <td width="20%">
                <a href="">Ratangad</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Ratnagiri</a>
              </td>

              <td width="20%">
                <a href="">Ravlya Fort</a>
              </td>

              <td width="20%">
                <a href="">Revdanda Fort</a>
              </td>

              <td width="20%">
                <a href="">Riwa Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Rohida Fort</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>S</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Sagargad</a>
            </td>

            <td width="20%">
              <a href="">Sajjangad</a>
            </td>

            <td width="20%">
              <a href="">Salher</a>
            </td>

            <td width="20%">
              <a href="">Salota Fort</a>
            </td>

            <tr>
              <td width="20%">
                <a href="">Samangad</a>
              </td>

              <td width="20%">
                <a href="">Sakharkherda Fort</a>
              </td>

              <td width="20%">
                <a href="">Sangram Durg</a>
              </td>

              <td width="20%">
                <a href="">Santoshgad</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Sarasgad</a>
              </td>

              <td width="20%">
                <a href="">Sarjekot Fort</a>
              </td>

              <td width="20%">
                <a href="">Sewri Fort</a>
              </td>

              <td width="20%">
                <a href="">Shaniwar Wada</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Shirgaon Fort</a>
              </td>

              <td width="20%">
                <a href="">Shivgad</a>
              </td>

              <td width="20%">
                <a href="">Shivneri</a>
              </td>

              <td width="20%">
                <a href="">Shrivardhan Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Siddhagad</a>
              </td>

              <td width="20%">
                <a href="">Sindhudurg Fort</a>
              </td>

              <td width="20%">
                <a href="">Sinhagad</a>
              </td>

              <td width="20%">
                <a href="">Sion Hillock Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Sitabuldi Fort</a>
              </td>

              <td width="20%">
                <a href="">Solapur Fort</a>
              </td>

              <td width="20%">
                <a href="">Sondai Fort</a>
              </td>

              <td width="20%">
                <a href="">Songir</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Songiri</a>
              </td>

              <td width="20%">
                <a href="">Sudhagad</a>
              </td>

              <td width="20%">
                <a href="">Sumargad</a>
              </td>

              <td width="20%">
                <a href="">Surgad</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Suvarnadurg</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>T</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Talagad</a>
            </td>

            <td width="20%">
              <a href="">Tandulwadi Fort</a>
            </td>

            <td width="20%">
              <a href="">Tailbaila Fort</a>
            </td>

            <td width="20%">
              <a href="">Takmak Fort</a>
            </td>

            <tr>
              <td width="20%">
                <a href="">Tankai Fort</a>
              </td>

              <td width="20%">
                <a href="">Tarapur Fort</a>
              </td>

              <td width="20%">
                <a href="">Terekhol Fort</a>
              </td>

              <td width="20%">
                <a href="">Thalner</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Tikona</a>
              </td>

              <td width="20%">
                <a href="">Tipagad</a>
              </td>

              <td width="20%">
                <a href="">Tringalwadi</a>
              </td>

              <td width="20%">
                <a href="">Trymbakgad</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Torna Fort</a>
              </td>

              <td width="20%">
                <a href="">Tung Fort</a>
              </td>

              <td width="20%">
                <a href="">Tungi</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>U</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Udgir Fort</a>
            </td>

            <td width="20%">
              <a href="">Underi</a>
            </td>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>V</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Vaghera Fort</a>
            </td>

            <td width="20%">
              <a href="">Vairagad Fort</a>
            </td>

            <td width="20%">
              <a href="">Vairatgad Fort</a>
            </td>

            <td width="20%">
              <a href="">Vajragad</a>
            </td>

            <tr>
              <td width="20%">
                <a href="">Vandan Fort</a>
              </td>

              <td width="20%">
                <a href="">Vardhangad Fort</a>
              </td>

              <td width="20%">
                <a href="">Varugad</a>
              </td>

              <td width="20%">
                <a href="">Vasai Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Vasantgad</a>
              </td>

              <td width="20%">
                <a href="">Vasota Fort</a>
              </td>

              <td width="20%">
                <a href="">Vijaydurg Fort</a>
              </td>

              <td width="20%">
                <a href="">Vijaygad Fort</a>
              </td>
            </tr>

            <tr>
              <td width="20%">
                <a href="">Vikatgad</a>
              </td>

              <td width="20%">
                <a href="">Visapur Fort</a>
              </td>

              <td width="20%">
                <a href="">Vishalgad</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>W</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Worli Fort</a>
            </td>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>

      <tr>
        <td bgcolor="#ec8d81">
          <font
            size="2"
            face="Verdana, Arial, Helvetica, sans-serif"
            color="blue"
            >&nbsp;<b>Y</b></font
          >
        </td>

        <td bgcolor="#6fc3df">
          <table width="100%" border="0">
            <td width="20%">
              <a href="">Yashwantgad </a>
            </td>
          </table>
        </td>
      </tr>
      <tr>
        <td><br /></td>
      </tr>
    </table>

    <br />




</div>
@endsection
