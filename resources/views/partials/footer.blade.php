    
export default{
    name:'LinkFooter',
    data() {
        return{
            dcComics: [
                {
                    text: 'Character',
                    url: '#'
                },
                {
                    text: 'Comics',
                    url: '#'
                },
                {
                    text: 'Movies',
                    url: '#'
                },
                {
                    text: 'TV',
                    url: '#'
                },
                {
                    text: 'Games',
                    url: '#'
                },
                {
                    text: 'Videos',
                    url: '#'
                },
                {
                    text: 'News',
                    url: '#'
                }
             
            ],
            shop:[
                {
                    text: 'Shop DC',
                    url: '#'
                },
                {
                    text: 'Shop DC Collectibles',
                    url: '#'
                }
            ],
            DC:[
                {
                    text: 'Terms of us',
                    url: '#'
                },
                {
                    text: 'Privacy policy(New)',
                    url: '#'
                },
                {
                    text: 'Ad Choices',
                    url: '#'
                },
                {
                    text: 'Advertising',
                    url: '#'
                },
                {
                    text: 'Jobs',
                    url: '#'
                },
                {
                    text: 'Subscriptions',
                    url: '#'
                },
                {
                    text: 'Talent Workshops',
                    url: '#'
                }
                ,
                {
                    text: 'CPSC Certificates)',
                    url: '#'
                },
                {
                    text: 'Ratings',
                    url: '#'
                },
                {
                    text: 'Shop Help',
                    url: '#'
                },
                {
                    text: 'Contact Us',
                    url: '#'
                }             
            ],
            sites:[
                {
                    text: 'DC',
                    url: '#'
                },
                {
                    text: 'MAD Magazine',
                    url: '#'
                },
                {
                    text: 'DC Kids',
                    url: '#'
                },
                {
                    text: 'DC Universe',
                    url: '#'
                },
                {
                    text: 'DC Power Visa',
                    url: '#'
                }
            ],

        }
    }
}


<footer class="my-5 text-center">
    <section id="contenitor_link">
        <img src="../assets/dc-logo-bg.png" class="logo" alt="DC Logo">
        
        <!-- collegamenti link prima colonna sinistra -->
        <div class="left">
            <div class="link_cards">
                <h3>DC COMICS</h3>
                <div v-for="(comics, index) in dcComics" :key="index">
                    <a :href="comics.url">{{ comics.text }}</a>
                </div>
            </div>
            <div class="link_cards">
                <h3>SHOP</h3>
                <div v-for="(shopItem, index) in shop" :key="index">
                    <a :href="shopItem.url">{{ shopItem.text }}</a>
                </div>
            </div>
        </div>

        <!-- collegamenti link seconda colonna al centro -->
        <div class="center">
            <div class="link_cards">
                <h3>DC</h3>
                <div v-for="(dcElement, index) in DC" :key="index">
                    <a :href="dcElement.url">{{ dcElement.text }}</a>
                </div>
            </div>
        </div>

        <!-- collegamenti link terza colonna a destra -->
        <div class="right">
            <div class="link_cards">
                <h3>SITES</h3>
                <div v-for="(sitesEl, index) in sites" :key="index">
                    <a :href="sitesEl.url">{{ sitesEl.text }}</a>
                </div>
            </div>
        </div>
    </section>
</footer>

