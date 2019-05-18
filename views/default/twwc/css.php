.wire-preview-card {

    width: 63%;

    display: grid;
    grid-column-gap: 12px;
    justify-items: stretch;
    grid-template-columns: 40% 60%;
    align-items: stretch;
    background-color: #fff;
    border: 1px solid #ccc;
}

.wire-preview-card:only-child {

    width: 98%;

    grid-template-columns: 35% 60%;

}

.wire-preview-card:only-child:after {

    content: none;

}

.wire-preview-card img {

    width: 100% !important;

}


.wire-preview-card h3 {

    padding-top: 8px;
    padding-bottom: 8px;
    
}

.wire-preview-card p.description {

    display: none;

}

.wire-preview-card:only-child p.description {

    display: inline-block;
}

.wire-preview-card h3 a {

    color: #494949;

}