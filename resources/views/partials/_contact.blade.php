<div id="contact" class="contact pt-5">
      <div class="container">

        <div class="section-title">
          <h2>Kontakt</h2>
          <p>Die Abgabe einer Anfrage ist für Sie unverbindlich und kostenlos!</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Ort:</h4>
                <p>Hardenbergstraße 10, 32427 Minden</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>freda-lohse@baucampus.de</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefon:</h4>
                <p>05722 913800</p>
              </div>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2440.5608782516947!2d8.902243777046202!3d52.28767367200127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ba7405ef476345%3A0xa1066e708ad5c889!2sHardenbergstra%C3%9Fe%2010%2C%2032427%20Minden!5e0!3m2!1sde!2sde!4v1673145152636!5m2!1sde!2sde"
                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

           <div class="card-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm" class="php-email-form-osk">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname" style="font-size:200%">Vorname:</label>
                                        <input type="text" name="firstname" class="form-control" placeholder="Vorname" value="{{ old('firstname') }}">
                                        @if ($errors->has('firstname'))
                                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname" style="font-size:200%">Nachname:</label>
                                        <input type="text" name="lastname" class="form-control" placeholder="Nachname" value="{{ old('lastname') }}">
                                        @if ($errors->has('lastname'))
                                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" style="font-size:200%">Telefonnummer:</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Telefonnummer" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" style="font-size:200%">E-mail:</label>
                                        <input type="text" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city" style="font-size:200%">Stadt:</label>
                                        <input type="text" name="city" class="form-control" placeholder="Stadt" value="{{ old('city') }}">
                                        @if ($errors->has('city'))
                                            <span class="text-danger">{{ $errors->first('city') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                 <label for="immobilienart" style="font-size:200%">Art der Immobilie:</label>
  <select name="objecttype" name="immobilienart" class="form-control">
<option value="" selected="selected">- Art der Immobilie (optional) -</option>
 <option value="Einfamilienhaus">Einfamilienhaus</option>
  <option value="Zweifamilienhaus">Zweifamilienhaus</option>
    <option value="Doppelhaushälfte">Doppelhaushälfte</option>
     <option value="Reihenhaus">Reihenhaus</option>
       <option value="Mehrfamilienhaus">Mehrfamilienhaus</option>
        <option value="Eigentumswohnung">Eigentumswohnung</option>
         <option value="Wohnhaus mit Mischnutzung">Wohnhaus mit Mischnutzung</option>
            <option value="Bürogebäude">Bürogebäude</option>
                 <option value="Alten-/Pflegeheim">Alten-/Pflegeheim</option>
                  <option value="Hotel/Beherbergungsstätte">Hotel/Beherbergungsstätte</option>
                    <option value="Verbrauchermarkt">Verbrauchermarkt</option>
                      <option value="Garage/Hochgarage/Tiefgarage">Garage/Hochgarage/Tiefgarage</option>
                        <option value="Produktionsgebäude">Produktionsgebäude</option>
                         <option value="Lagergebäude">Lagergebäude</option>
                          <option value="Landwirtschaftliche Gebäude">Landwirtschaftliche Gebäude</option>
                           <option value="Sonstige Gebäude">Sonstige Gebäude</option>
                           </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message" style="font-size:200%">Ihre Anfrage:</label>
                                        <textarea name="message" placeholder="Ihre Anfrage" rows="3" class="form-control">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div>   
                             <div class="checkbox">
                            <label for="checkbox_id" style="font-size:200%">Zustimmung:</label>
                             <p><input type="checkbox"  name="checkbox" id="checkbox_id" value="Checkbox"> 
                                         @if ($errors->has('checkbox'))
                                            <span class="text-danger">{{ $errors->first('checkbox') }}</span>
                                        @endif   
                                        
                              Ich stimme zu, dass meine Angaben aus dem Kontaktformular zur Bearbeitung meiner Anfrage erhoben und verarbeitet werden. Hinweis: Sie können Ihre Einwilligung jederzeit für die Zukunft per E-Mail widerrufen. Detaillierte Informationen zum Umgang mit Nutzerdaten finden Sie in unserer <a href="/datenschutzerklaerung">Datenschutzerklärung</a>.</p>
</label></div>
                              <div class="form-group text-center mb-5 mt-5">
                                            <div class="text-center"><button class="submit" style="    background-color: #149ddd; border: none; color: white; padding: 16px 32px; text-decoration: none; margin: 4px 2px; cursor: pointer; font-size: 16px; border-radius: 5px;">Senden</button></div>

                                
                            </div>
                        </form>
                    </div>
          </div>

        </div>

      </div>
</div>