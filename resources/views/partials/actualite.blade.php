<!--Actualités section-->
<section id="actualite" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Actualités</h2>
            <div class="w-24 h-1 bg-fijada-green mx-auto"></div>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <article
                class="bg-white rounded-xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="h-64 overflow-hidden">
                    <img src="images/actualites/23242024.jpg" alt="Forum FIJADA 2024"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                        loading="lazy">
                </div>
                <div class="p-6">
                    <div class="mb-3">
                        <span
                            class="inline-block bg-fijada-green/10 text-fijada-green px-3 py-1 rounded-full text-sm font-semibold">
                            23 au 26 Mai 2024
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        Forum de 2024
                    </h3>
                    <div x-data="{ expanded: false }">
                        <p class="text-gray-600 leading-relaxed mb-5" :class="!expanded && 'line-clamp-3'">
                            Le Forum international de la jeunesse africaine pour le développement de l'Afrique FIJADA en
                            sigle a participé au sommet de la SADC sur la jeunesse, qui s'est tenu à Harare, au
                            Zimbabwe, du 23 au 26 mai 2024 . La délégation de la République Démocratique du Congo était
                            dirigée par Monsieur Lumeya Masuta Jonathan.
                            <span x-show="expanded">
                            </span>
                        </p>

                        <button @click="expanded = !expanded"
                            class="text-fijada-blue font-medium hover:text-fijada-green transition-colors focus:outline-none cursor-pointer">
                            <span x-text="expanded ? 'Lire moins' : 'Lire plus'"></span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 inline ml-1 transition-transform duration-300"
                                :class="expanded && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </article>

            <article
                class="bg-white rounded-xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="h-64 overflow-hidden">
                    <img src="images/actualites/12172025.jpg" alt="Forum FIJADA 2024"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                        loading="lazy">
                </div>
                <div class="p-6">
                    <div class="mb-3">
                        <span
                            class="inline-block bg-fijada-green/10 text-fijada-green px-3 py-1 rounded-full text-sm font-semibold">
                            12 au 17 Février 2025
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        Forum de 2025
                    </h3>
                    <div x-data="{ expanded: false }">
                        <p class="text-gray-600 leading-relaxed mb-5" :class="!expanded && 'line-clamp-3'">
                            La remise de brevets de la jeunesse africaine a eu lieu lors d'une formation sur le
                            développement durable, organisée du 12 au 17 février. Cet événement a rassemblé des jeunes
                            leaders de divers pays pour renforcer leurs compétences en gestion des ressources
                            naturelles, énergies renouvelables et lutte contre le changement climatique. À la fin de la
                            formation, les participants ont reçu des brevets en reconnaissance de leur engagement à
                            devenir des agents de changement dans leurs communautés, soulignant l'importance de
                            l'implication des jeunes dans le développement durable en Afrique.
                            <span x-show="expanded">
                            </span>
                        </p>

                        <button @click="expanded = !expanded"
                            class="text-fijada-blue font-medium hover:text-fijada-green transition-colors focus:outline-none cursor-pointer">
                            <span x-text="expanded ? 'Lire moins' : 'Lire plus'"></span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 inline ml-1 transition-transform duration-300"
                                :class="expanded && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </article>

            <article
                class="bg-white rounded-xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="h-64 overflow-hidden">
                    <img src="images/actualites/10152025.jpg" alt="Forum FIJADA 2024"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                        loading="lazy">
                </div>
                <div class="p-6">
                    <div class="mb-3">
                        <span
                            class="inline-block bg-fijada-green/10 text-fijada-green px-3 py-1 rounded-full text-sm font-semibold">
                            10 au 15 Mars 2025
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        Forum de 2025
                    </h3>
                    <div x-data="{ expanded: false }">
                        <p class="text-gray-600 leading-relaxed mb-5" :class="!expanded && 'line-clamp-3'">
                            La remise de brevets de la jeunesse africaine a eu lieu lors d'une formation sur le
                            patriotisme du 10 au 15 mars. Cet événement a rassemblé des jeunes leaders de plusieurs pays
                            pour renforcer leur compréhension des valeurs patriotiques et de l'engagement civique. Les
                            participants ont suivi des ateliers et des discussions sur l'histoire nationale, les droits
                            et devoirs des citoyens, et les défis contemporains. À l'issue de la formation, ils ont reçu
                            des brevets en reconnaissance de leur engagement à promouvoir le patriotisme, marquant le
                            début d'un mouvement collectif pour inspirer d'autres jeunes à s'impliquer dans le
                            développement de leurs pays.
                            <span x-show="expanded">
                            </span>
                        </p>

                        <button @click="expanded = !expanded"
                            class="text-fijada-blue font-medium hover:text-fijada-green transition-colors focus:outline-none cursor-pointer">
                            <span x-text="expanded ? 'Lire moins' : 'Lire plus'"></span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 inline ml-1 transition-transform duration-300"
                                :class="expanded && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </article>

            <article
                class="bg-white rounded-xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="h-64 overflow-hidden">
                    <img src="images/actualites/honorable Grâce Neema.jpg" alt="Forum FIJADA 2024"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                        loading="lazy">
                </div>
                <div class="p-6">
                    <div class="mb-3">
                        <span
                            class="inline-block bg-fijada-green/10 text-fijada-green px-3 py-1 rounded-full text-sm font-semibold">
                            2025
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        Forum de 2025
                    </h3>
                    <div x-data="{ expanded: false }">
                        <p class="text-gray-600 leading-relaxed mb-5" :class="!expanded && 'line-clamp-3'">
                            Remise de brevets de mérite à l'honorable Grâce Neema, questeur adjointe de l'Assemblée
                            nationale, en tant que marraine du Forum international de la jeunesse africaine pour le
                            développement de l'Afrique. Cet événement a célébré son engagement indéfectible envers la
                            promotion des initiatives jeunesse sur le continent. Grâce à son leadership inspirant, elle
                            a su mobiliser les jeunes autour des enjeux de développement durable et d'entrepreneuriat.
                            La cérémonie a également été l'occasion de mettre en lumière les contributions
                            significatives des jeunes leaders dans la transformation de l'Afrique, soulignant
                            l'importance de leur rôle dans la construction d'un avenir meilleur pour tous.
                            <span x-show="expanded">
                            </span>
                        </p>

                        <button @click="expanded = !expanded"
                            class="text-fijada-blue font-medium hover:text-fijada-green transition-colors focus:outline-none cursor-pointer">
                            <span x-text="expanded ? 'Lire moins' : 'Lire plus'"></span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 inline ml-1 transition-transform duration-300"
                                :class="expanded && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </article>

            <article
                class="bg-white rounded-xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="h-64 overflow-hidden">
                    <img src="images/actualites/Professeur Jean-Marie Kayembe Ntumba.jpg" alt="Forum FIJADA 2024"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                        loading="lazy">
                </div>
                <div class="p-6">
                    <div class="mb-3">
                        <span
                            class="inline-block bg-fijada-green/10 text-fijada-green px-3 py-1 rounded-full text-sm font-semibold">
                            2025
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        Forum de 2025
                    </h3>
                    <div x-data="{ expanded: false }">
                        <p class="text-gray-600 leading-relaxed mb-5" :class="!expanded && 'line-clamp-3'">
                            La cérémonie de remise de brevets de mérite au Professeur Jean-Marie Kayembe Ntumba, Recteur
                            de l'Université de Kinshasa et parrain du Forum International de la Jeunesse Africaine pour
                            le Développement de l'Afrique, a célébré son engagement exceptionnel envers l'éducation et
                            le développement des jeunes. Il a joué un rôle clé dans la promotion de l'innovation et de
                            l'entrepreneuriat, offrant aux jeunes des opportunités de s'épanouir et de contribuer à la
                            transformation de l'Afrique. Son dévouement fait de lui un modèle inspirant pour les futurs
                            leaders africains, soulignant l'importance de l'engagement académique pour un développement
                            durable et inclusif.
                            <span x-show="expanded">
                            </span>
                        </p>

                        <button @click="expanded = !expanded"
                            class="text-fijada-blue font-medium hover:text-fijada-green transition-colors focus:outline-none cursor-pointer">
                            <span x-text="expanded ? 'Lire moins' : 'Lire plus'"></span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 inline ml-1 transition-transform duration-300"
                                :class="expanded && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </article>

            <article
                class="bg-white rounded-xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="h-64 overflow-hidden">
                    <img src="images/actualites/22272025.jpg" alt="Forum FIJADA 2024"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                        loading="lazy">
                </div>
                <div class="p-6">
                    <div class="mb-3">
                        <span
                            class="inline-block bg-fijada-green/10 text-fijada-green px-3 py-1 rounded-full text-sm font-semibold">
                            22 au 27 Mai 2025
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        Forum de 2025
                    </h3>
                    <div x-data="{ expanded: false }">
                        <p class="text-gray-600 leading-relaxed mb-5" :class="!expanded && 'line-clamp-3'">
                            Séjournant à Harare pour participer au sommet des chefs d'État et des membres du
                            gouvernement des pays membres de la SADC, ainsi qu'au sommet de la Terre et de la Liberté
                            économique qui s'est tenu du 22 au 27 mai, Lumeya masuta Jonathan, le président du Forum
                            international de la jeunesse africaine pour le développement de l'Afrique (FIJADA) a
                            représenté la République Démocratique du Congo, accompagné de 35 ambassadeurs de la jeunesse
                            congolaise provenant de 26 provinces.

                            La participation de ces jeunes ambassadeurs renforce la diplomatie entre la République
                            Démocratique du Congo et d'autres nations. En s'engageant dans des dialogues constructifs et
                            en partageant leurs expériences, ces jeunes leaders établissent des relations solides avec
                            leurs homologues d'autres pays. Leur présence au sommet favorise également une meilleure
                            compréhension des enjeux régionaux et internationaux, tout en mettant en avant les
                            aspirations et les potentialités de la jeunesse congolaise. Cela ouvre la voie à de futures
                            collaborations et initiatives communes, renforçant ainsi les liens diplomatiques et
                            économiques entre la RDC et ses partenaires.
                            <span x-show="expanded">
                            </span>
                        </p>

                        <button @click="expanded = !expanded"
                            class="text-fijada-blue font-medium hover:text-fijada-green transition-colors focus:outline-none cursor-pointer">
                            <span x-text="expanded ? 'Lire moins' : 'Lire plus'"></span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 inline ml-1 transition-transform duration-300"
                                :class="expanded && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </article>

            <article
                class="bg-white rounded-xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="h-64 overflow-hidden">
                    <img src="images/actualites/19272025.jpg" alt="Forum FIJADA 2024"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                        loading="lazy">
                </div>
                <div class="p-6">
                    <div class="mb-3">
                        <span
                            class="inline-block bg-fijada-green/10 text-fijada-green px-3 py-1 rounded-full text-sm font-semibold">
                            19 au 21 Mars 2025
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        Forum de 2025
                    </h3>
                    <div x-data="{ expanded: false }">
                        <p class="text-gray-600 leading-relaxed mb-5" :class="!expanded && 'line-clamp-3'">
                            Le Forum International de la Jeunesse Africaine pour le Développement de l'Afrique (FIJADA)
                            a participé à une simulation de l'Union Africaine à Brazzaville du 19 au 21 mars. Cet
                            événement a permis aux jeunes de s'engager dans des discussions sur des enjeux continentaux,
                            de simuler des processus décisionnels et de promouvoir leur rôle dans le développement
                            durable de l'Afrique.
                            <span x-show="expanded">
                            </span>
                        </p>

                        <button @click="expanded = !expanded"
                            class="text-fijada-blue font-medium hover:text-fijada-green transition-colors focus:outline-none cursor-pointer">
                            <span x-text="expanded ? 'Lire moins' : 'Lire plus'"></span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 inline ml-1 transition-transform duration-300"
                                :class="expanded && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </article>

            <article
                class="bg-white rounded-xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="h-64 overflow-hidden">
                    <img src="images/actualites/12082025.jpg" alt="Forum FIJADA 2024"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                        loading="lazy">
                </div>
                <div class="p-6">
                    <div class="mb-3">
                        <span
                            class="inline-block bg-fijada-green/10 text-fijada-green px-3 py-1 rounded-full text-sm font-semibold">
                            12 Août 2025
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        Forum de 2025
                    </h3>
                    <div x-data="{ expanded: false }">
                        <p class="text-gray-600 leading-relaxed mb-5" :class="!expanded && 'line-clamp-3'">
                            Le 12 août a été un jour mémorable où la jeunesse africaine s'est rassemblée, s'est exprimée
                            et a proposé des solutions audacieuses pour l'avenir de l'Afrique.
                            Revivez en vidéo les moments forts du FIJADA, une journée marquée par une énergie
                            débordante, des échanges enrichissants et l'inspiration. La voix des jeunes a résonné plus
                            fort que jamais, et ce n'est que le début.
                            Merci à tous les participants, intervenants et partenaires qui ont rendu cette
                            journée possible.
                            <span x-show="expanded">
                            </span>
                        </p>

                        <button @click="expanded = !expanded"
                            class="text-fijada-blue font-medium hover:text-fijada-green transition-colors focus:outline-none cursor-pointer">
                            <span x-text="expanded ? 'Lire moins' : 'Lire plus'"></span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 inline ml-1 transition-transform duration-300"
                                :class="expanded && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</section>
