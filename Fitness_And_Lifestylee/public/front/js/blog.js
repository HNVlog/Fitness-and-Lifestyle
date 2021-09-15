function getCategory(CategoryName)
    {
    var link=location.origin+'/blog'+'?category='+CategoryName;
    location.href=link;
}

function getPage(PageNumber)
    {
        var link=location.origin+location.pathname+'?page='+PageNumber;
        location.href=link;
}

function getPath(PathNumber)
{
    var link=location.origin+location.pathname+'?path='+PathNumber;
    location.href=link;
}
