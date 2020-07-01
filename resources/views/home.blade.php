@extends('layouts.app')

@section('title', 'Il corso per diventare web developer e trovare un lavoro')

@section('content')
    <div class="jumbo">
        <div class="contents">
            <div class="title">
                <section class="h1">
                   <p>Diventa</p>
                   <strong><p>sviluppatore</p></strong>
                   <strong><p>web</p></strong>
                </section>
                <section class="sottotitolo">
                    <strong>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</strong> 
                </section>
                <section class="testo">
                    <ul>
                        <li>6 mesi di corso intensivo online in diretta</li>
                        <li>Nessuna competenza di programmazione richiesta</li>
                        <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
                    </ul>
                </section>
            </div>
            <div class="gif">
                <img src="{{ asset('img/pc-black-gif.gif') }}" alt="">
            </div>
        </div>
    </div>
    <div class="bg-blue">
        <div class="numbers">
            <section class="percentuale">
                <h1>98%</h1>
                <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
            </section>
            <section class="euro">
                <h1>€ 23.000</h1>
                <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</p>
            </section>
            <section class="first">
                <h1>#1</h1>
                <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
            </section>
        </div>
    </div>
    <div class="partners bg-white">

    </div>
    
@endsection