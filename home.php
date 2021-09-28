<main>
    <div class="row bg-white py-5">
        <div class="container">
            <div class="oq_fazemos">
                <h2 class="mt-3 ml-2 text-primary text-bold">O que nós fazemos</h2>
                <p>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cum fuga fugit itaque maxime qui tempore. Aliquid assumenda autem culpa dignissimos doloremque dolores eligendi hic illo illum vitae! Enim, nihil?</span><span>Ab accusamus aliquam animi aspernatur esse, in laudantium molestiae molestias, natus neque non praesentium, quas quo quod rem similique temporibus. Accusantium distinctio dolore dolorem dolores possimus provident vel voluptatem. Nobis!</span><span>Beatae cumque dicta, dolore eaque, eius exercitationem fugit ipsum iste labore maxime molestiae mollitia officiis quam, qui ratione sint voluptates? Ab, consequuntur exercitationem maiores pariatur rem tenetur vero voluptatum? Aut.</span><span>A blanditiis consequuntur, cumque enim ex, fugiat hic laboriosam molestias nulla perferendis provident qui quis quisquam quod recusandae reprehenderit saepe totam, velit! Dolore earum esse nam nobis qui soluta unde.</span><span>Adipisci asperiores cumque deserunt facilis ipsum quae reiciendis reprehenderit sunt. Ab aliquam cum expedita libero numquam quaerat sint soluta tenetur ut voluptas. Amet excepturi, odio reiciendis repellat sequi suscipit tempore.</span><span>Distinctio dolor eligendi exercitationem explicabo maiores nisi quo unde? Aspernatur eveniet impedit maiores, odit praesentium quod. Cumque, quam, suscipit. Accusantium dolor est fugit iste porro provident quibusdam quisquam quo voluptatum.</span>
                </p>
                <div class="services mt-3">
                    <a class="btn-service" href="index.php?page=produto&produto=01"><img src="assets/service-1.png" alt=""></a>
                    <a class="btn-service" href="index.php?page=produto&produto=02"><img src="assets/service-2.png" alt=""></a>
                    <a class="btn-service" href="index.php?page=produto&produto=03"><img src="assets/service-3.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="qm_somos col-8 pl-3">
                    <h2 class="mt-3 ml-2 text-primary text-bold">Quem somos nós</h2>
                    <p class="mt-3">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad atque ea eaque eos expedita in inventore magnam minima perferendis perspiciatis placeat quibusdam ratione repellat repellendus sed totam! Ratione, ut?</span>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad atque ea eaque eos expedita in inventore magnam minima perferendis perspiciatis placeat quibusdam ratione repellat repellendus sed totam! Ratione, ut?</span>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad atque ea eaque eos expedita in inventore magnam minima perferendis perspiciatis placeat quibusdam ratione repellat repellendus sed totam! Ratione, ut?</span>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad atque ea eaque eos expedita in inventore magnam minima perferendis perspiciatis placeat quibusdam ratione repellat repellendus sed totam! Ratione, ut?</span>
                        <span class="toggled_text" style="display: none">
                    A ab, alias atque beatae consequuntur delectus ducimus ea est facere ipsam modi mollitia odit quasi qui, quibusdam sapiente similique unde velit! Itaque labore, nisi officia quis quisquam velit voluptatibus!
                A accusantium culpa dicta eos ex illum inventore nemo nulla odit officia, placeat praesentium quis veniam. Aperiam, commodi deserunt ea esse est incidunt itaque labore quos recusandae repudiandae rerum ut.
                Aliquam assumenda deserunt eaque facilis hic id, modi nemo perferendis ullam vero. Accusantium animi asperiores consequuntur dicta enim inventore, itaque, laudantium maiores nihil omnis perferendis perspiciatis placeat quos tempore voluptatibus?
                A accusamus alias architecto asperiores atque beatae debitis deleniti dicta, dolor dolorem ducimus earum ipsa ipsum iusto nemo nesciunt omnis quae quia ratione.
                </span>
                        <a class="toggle_text" onclick="toggle(this)">Mostra mais...</a>
                    </p>
                </div>
                <div class="fale_conosoco col-4 pr-3">
                    <h2 class="mt-3 ml-2 text-primary text-bold">Fale Conosco</h2>
                    <?php if (isset($_SESSION['validate']) && !$_SESSION['validate']): ?>
                        <div class="has_error">
                            Os campos <?php
                            foreach ($_SESSION['campos'] as $key => $campo) {
                                if ($key == count($_SESSION['campos']) - 1)
                                    echo " e ";
                                elseif ($key > 0)
                                    echo ", ";
                                echo $campo;
                            }
                            ?> não foram preenchidos
                        </div>
                    <?php endif; ?>
                    <form action="form.php" class="form fale_conosoco" method="post" novalidate>
                        <div class="nome">
                            <label for="nome"><b> Nome: </b></label>
                            <input type="text" name="nome" id="nome" class="inputUser" required>
                            <div class="with-errors">
                                Preencha o nome
                            </div>
                        </div>
                        <br>
                        <div class="tel">
                            <label for="tel"><b> Telefone: </b></label>
                            <input type="text" name="tel" id="tel" class="inputUser" required>
                            <div class="with-errors">
                                Preencha o telefone
                            </div>
                        </div>
                        <br>
                        <div class="email">
                            <label for="email"><b> E-mail: </b></label>
                            <input type="text" name="email" id="email" class="inputUser" required>
                            <div class="with-errors">
                                Preencha o e-mail
                            </div>
                        </div>
                        <br>
                        <div class="msg">
                            <label for="msg"><b> Mensagem: </b></label>
                            <textarea name="msg" id="msg" class="inputUser" required></textarea>
                            <div class="with-errors">
                                Preencha a mensagem
                            </div>
                        </div>
                        <button class="btn btn-primary text-700 mt-3">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>