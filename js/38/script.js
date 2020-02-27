function returner(some) {
    if((typeof some) = 'string' )
    {
        return document.getElementById(some);
    }
    else
    {
        return some;
    }
}