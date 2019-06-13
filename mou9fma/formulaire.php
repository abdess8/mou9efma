
<div data-spy="scroll" data-target="#container" id="reservation" data-offset="" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Réservez Maintenant!</h2>
            <p class="lead main text-center">Choissisez et Profitez Des Outils Gratuits</p>
            <div class="row">
                <div class="col-md-6">
                    <form action="insrt.php" method="POST" >
                        <div class="form-group">
                            <h4>C'est Rapide! Juste Remplissez Ce Formulaire</h4>
                        </div>

                        <div class="row">                           
                          <div class="col-lg-6 col-md-6 form-group">   
                          <input class="form-control hint" type="text"  name="firstname" placeholder="Prénom*" required>
                          </div>
                            
                          <div class="col-lg-6 col-md-6 form-group">                        
                          <input class="form-control hint" type="text"  name="lastname" placeholder="Nom*" required>
                          </div>
                        </div>
                        
                        <div class="row">                   
                          <div class="col-lg-6 col-md-6 form-group">          
                          <input class="form-control hint" type="text"  name="phone" placeholder="Téléphone*" required>
                          </div>
						   <div class="col-lg-6 col-md-6 form-group">                                
                           <input class="form-control datepicker hasDatepicker hint" type="date" name="reservation" placeholder="Date de réservation" required>
                           </div>
                        </div>
                        
                        <div class="row">                   
                          <div class="col-lg-12 col-md-12 form-group">          
                          <input class="form-control hint" type="text"  name="adresse" placeholder="Adresse*" required>
                          </div>
                        </div>
						
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
						  	<select class="form-control hint" name="ville" required>
                                <option  value="ville" >Votre Ville*</option>
							    <option  value="Agadir">Agadir</option>
                                <option  value="Assilah">Assilah</option>
                                <option  value="beni mellal">beni mellal</option>
                                <option  value="Benslimane">Benslimane</option>
                                <option  value="Bouznika ">Bouznika </option>
                                <option  value="Casablanca">Casablanca</option>
                                <option  value="Chefchaouen">Chefchaouen</option>
                                <option  value="Chichaoua">Chichaoua</option>
                                <option  value="El Jadida">El Jadida</option>
                                <option  value="El Kelaa des Sraghna">El Kelaa des Sraghna</option>
                                <option  value="Errachidia">Errachidia</option>
                                <option  value="Essaouira">Essaouira</option>
                                <option  value="Fes">Fes</option>
                                <option  value="Hoceima">Hoceima</option>
                                <option  value="Ifrane">Ifrane</option>
                                <option  value="Kenitra">Kenitra</option>
                                <option  value="Khemisset">Khemisset</option>
                                <option  value="Khouribga">Khouribga</option>
                                <option  value="Laayoune">Laayoune</option>
                                <option  value="Larache">Larache</option>
                                <option  value="Marrakech">Marrakech</option>
                                <option  value="Meknes">Meknes</option>
                                <option  value="Midelt">Midelt</option>
                                <option  value="Mohammedia">Mohammedia</option>
                                <option  value="Oujda">Oujda</option>
                                <option  value="Safi">Safi</option>
                                <option  value="Sale">Sale</option>
                                <option  value="Sefrou">Sefrou</option>
                                <option  value="Settat">Settat</option>
                                <option  value="Sidi Bennour">Sidi Bennour</option>
                                <option  value="Skhirat">Skhirat</option>
                                <option  value="Tanger">Tanger</option>
                                <option  value="Tarfaya">Tarfaya</option>
                                <option  value="Temara">Temara</option>
                                <option  value="Tetouan">Tetouan</option>
                                <option  value="Tiznit">Tiznit</option>
                                <option  value="Zagora">Zagora</option>
			                </select>
                          </div>
                          
                    
						<div class="col-lg-6 col-md-6 form-group">
						  	<select class="form-control hint" name="service" id="service" required>
                                <option autocomplete="off" value="service">Choisissez un service*</option>
				                <option  value="Plomberie">Plomberie</option>
                                <option  value="Electricite">Electricité</option>
                                <option  value="Menuiserie">Menuiserie</option>
                                <option  value="Electronique">Électronique</option>
                                <option  value="Maçonnerie">Maçonnerie</option>
                                <option  value="Peinture">Peinture</option>
                                <option  value="Parabole">Parabole</option>
                                <option  value="Vitrerie - Aluminium">Vitrerie - Aluminium</option>
                                <option  value="Clim et froid">Clim et froid</option>
                                <option  value="Serrurerie">Serrurerie</option>
                                <option  value="Platrier">Plâtrier</option>
                                <option  value="Ferronnerie">Ferronnerie</option>
                                <option  value="Surveillance et alarmes">Surveillance et alarmes</option>
                                <option  value="Etancheite">Etanchéité</option>
                                <option  value="Carrelage">Carrelage</option>
                                <option  value="Electromenager">Electroménager</option>
                                <option  value="Mecanique">Mécanique</option>
                                <option  value="Transport">Transport</option>
                                <option  value="Electricite-Auto">Electricité-Auto</option>
                                <option  value="Tapisserie">Tapisserie</option>
                                <option  value="Ascenseurs">Ascenseurs</option>
                                <option  value="Jardinier">Jardinier</option>
                                <option  value="Demolition">Démolition</option>
                                <option  value="Encadrement">Encadrement</option>
                                <option  value="pneumatiques">pneumatiques</option>
                                <option  value="Marbre">Marbre</option>
                                <option  value="Depannage">Dépannage</option>
                                <option  value="Piscine">Piscine</option>
                                <option  value="Agent de Securite">Agent de Sécurité</option>
                                <option  value="Chauffeur">Chauffeur</option>
                                <option  value="Taxi">Taxi</option>
                                <option  value="Vendeur">Vendeur</option>
                                <option  value="Hotliner">Hotliner</option>
                                <option  value="Baby-sitter">Baby-sitter</option>
                                <option  value="Pet-sitter">Pet-sitter</option>
                                <option  value="Guide">Guide</option>
                                <option  value="Infirmier">Infirmier(e)</option>
                                <option  value="Photographer">Photographer</option>
                                <option  value="Docker">Docker</option>
                                <option  value="Assistant">Assistant(e)</option>
                                <option  value="Boulangerie">Boulangerie</option>
                                <option  value="Menage">Ménage</option>
                                <option  value="Agent Commercial">Agent Commercial</option>
                                <option  value="Pompier">Pompier</option>
                                <option  value="Accompagnant">Accompagnant</option>
                                <option  value="Peinture-auto">Peinture-auto</option>
                                <option  value="Cuisinier">Cuisinier(e)</option>
                                <option  value="Estheticen">Esthéticen(e)</option>
                                <option  value="Massage">Massage</option>		
                                <option  value="Comptable">Comptable</option>	
                                <option  value="Bureau detude">Bureau d'étude</option>
                                <option  value="Autre">Autre</option>			
							</select>
							
						</div>
                        </div>
                        
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                          <form action="/action_page.php">
                          <input type="checkbox" name="regle" value="regle" unchecked="" required>&nbsp;&nbsp;&nbsp;J'ai lu et j'accepte <a href="licence.html" target="_blank">la politique de confidentialité</a><br><br>
                          <button  type="submit" class="btn btn-danger btn-lg" name="submit">Envoyer</button>
                          </form>    
                          </div>
                        </div>
                      </form>
                </div>
                
                <div class="col-md-5 col-md-offset-1">
                    
                    <h3><i class="fa fa-clock-o fa-fw"></i>24/7</h3><br>
                    <h4></h4>
                    <h3><i class="fa fa-map-marker fa-fw"></i>Siège</h3>
                    <p>13 Avenue Casablanca, Tétouan, Résidance ElMajd, apt 3</p><br>

                    <h3><i class="fa fa-mobile fa-fw"></i>Contacts</h3>
                    <p>Email: <a href="mailto:contact@mou9ef.com">mou9efma@gmail.com</a></p>
                    <p>Téléphone: +212 659264735</p><br>
                    <p><b>Mou9ef.ma est partout au Maroc!</b></p>


                </div>
            </div>
           
        </div>
        <section class="ss-style-bottom"></section>
    </div>
