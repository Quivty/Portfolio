    //Counting the number of projects shown

    function numberOfProjects(){
        let spanid=document.querySelector("#nofpr")
        let num=document.getElementsByClassName("project").length
        // spanid.innerHTML=num;   
        spanid.innerHTML=num;
    }
    numberOfProjects();