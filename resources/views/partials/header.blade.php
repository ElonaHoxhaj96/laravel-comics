
<header>
    <nav>
        <div>
            <img src="../assets/dc-logo.png" alt="logo">
        </div>
        <ul>
            <li>
                <a href="#" class="">CHARACTER</a>
                <a href="#" class="">MOVIES</a>
                <a href="#" class="">TV</a>
                <a href="#" class="">GAMES</a>
                <a href="#" class="">COLLECTIBLES</a>
                <a href="#" class="">VIDEOS</a>
                <a href="#" class="">FANS</a>
                <a href="#" class="">NEWS</a>
                <a href="#" class="">SHOP</a>
            </li>
        </ul>
    </nav>
</header>


<style lang="scss" scoped>
    nav{
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    ul{
        display: flex;
        gap: 1rem;
    }
    li{
       list-style: none;
       :hover{
            border-bottom: solid 0.2rem blue;
            }
       a{
        text-decoration: none;
        color: rgb(88, 88, 88);
        font-weight: bold;
        padding-bottom: 2.4rem; 
       }
    }

</style>