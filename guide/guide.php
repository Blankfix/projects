<!DOCTYPE html>
<html>
    <head>
        <?php require_once 'layout/head.php'; ?>
    </head>
    <body>

        <div class="container">

            <div class="row no-gutters">

                <?php require_once 'layout/nav.php'; ?>
                <?php require_once 'layout/header.php'; ?>

                <div class="content">

                    <!-- Titles -->
                    <section id="title">
                        <div class="title_section">Titres</div>
                        <div class="section_content">
                            <?php require_once 'template_part/titles.php'; ?>
                        </div>
                    </section>

                    <!-- Colors -->
                    <section id="colors">
                        <div class="title_section">Couleurs</div>
                        <div class="section_content">
                            <?php require_once 'template_part/colors.php'; ?>
                        </div>
                    </section>

                    <!-- Text -->
                    <section id="text">
                        <div class="title_section">Typographie</div>
                        <div class="section_content">
                            <?php require_once 'template_part/text.php'; ?>
                        </div>
                    </section>

                    <!-- Buttons -->
                    <section id="buttons">
                        <div class="title_section">Boutons</div>
                        <div class="section_content">
                            <?php require_once 'template_part/buttons.php'; ?>
                        </div>
                    </section>


                    <!-- Links -->
                    <section id="links">
                        <div class="title_section">Liens</div>
                        <div class="section_content">
                            <?php require_once 'template_part/links.php'; ?>
                        </div>
                    </section>

                    <!-- Pastilles -->
                    <section id="icons_pastil">
                        <div class="title_section">Pastilles</div>
                        <div class="section_content">
                            <?php require_once 'template_part/pastils.php'; ?>
                        </div>
                    </section>

                    <!-- Tooltip -->
                    <section id="tooltip">
                        <div class="title_section">Tooltip</div>
                        <div class="section_content">
                            <?php require_once 'template_part/tooltip.php'; ?>
                        </div>
                    </section>

                    <!-- Forms -->
                    <section id="form">
                        <div class="title_section">Formulaire</div>
                        <div class="section_content">
                            <?php require_once 'template_part/forms.php'; ?>
                        </div>
                    </section>

                    <!-- Tables -->
                    <section id="table">
                        <div class="title_section">Tableaux</div>
                        <div class="section_content">
                            <?php require_once 'template_part/table.php'; ?>
                        </div>
                    </section>

                    <!-- Icons -->
                    <section id="picto">
                        <div class="title_section">Icônes</div>
                        <div class="section_content">
                            <?php require_once 'template_part/icons.php'; ?>
                        </div>
                    </section>

                    <!-- List -->
                    <section id="list">
                        <div class="title_section">Listes</div>
                        <div class="section_content">
                            <?php require_once 'template_part/list.php'; ?>
                        </div>
                    </section>

                    <!-- Pagination -->
                    <section id="pagination">
                        <div class="title_section">Pagination</div>
                        <div class="section_content">
                            <?php require_once 'template_part/pagination.php'; ?>
                        </div>
                    </section>

                </div>
            </div>
        </div>


        <!-- VENDOR :: jQuery-->
        <script src="../assets/libs/jquery/jquery-3.2.1.min.js"></script>
        <!-- VENDOR :: Bootstrap -->
        <script src="../assets/libs/popper/js/popper.min.js"></script>
        <script src="../assets/libs/bootstrap/js/bootstrap.min.js"></script>
        <!-- APP :: Scripts -->
        <script src="../assets/js/home.js"></script>

    </body>
</html>

