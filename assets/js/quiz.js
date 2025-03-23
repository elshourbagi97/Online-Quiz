let btn = document.getElementById('btn-question');
let questions = document.getElementById('Questions');
let btnX = document.getElementById('btnX');
let btnClose = document.getElementById('btnClose');
let show_quiz = document.getElementById('show-quiz');
let quiz = document.getElementById('Quiz');
let btnX2 =document.getElementById('btnX2');
let table =document.getElementById('table');
let section =document.getElementById('section');
let OK =document.getElementById('OK');




console.log(btnX);
btn.onclick=()=>{
questions.style.display="flex";
}
btnX.onclick=()=>{
    questions.style.display="none";
    }
btnClose.onclick=()=>{
    questions.style.display="none";
    }
show_quiz.onclick=()=>{
        quiz.style.display="block";
        table.style.visibility="hidden"
        let quizHeight = quiz.scrollHeight; 
        section.style.height = quizHeight + "px";
     }    
 btnX2.onclick=()=>{
            quiz.style.display="none";
            table.style.visibility="visible"
            section.style.height = "fit-content"; 
            }   
 OK.onclick=()=>{
                quiz.style.display="none";
                table.style.visibility="visible"
                section.style.height = "100%"; 
     }             