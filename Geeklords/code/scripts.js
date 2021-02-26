let url = 'https://api.fda.gov/drug/ndc.json?search=paracetamol&limit=1';

console.log('HEllo world');

function getData(){
    url='https://api.fda.gov/drug/ndc.json?search='+document.getElementById('input').value+'&limit=1'
    fetch(url)
    .then(res => res.json())
    .then((out) => {
        console.log('Checkout this JSON! ', out);
        let results=out.results[0].generic_name;
        console.log(results)
        document.getElementById("gname").innerHTML = results;
        results=out.results[0].labeler_name;
        document.getElementById("lname").innerHTML = results;
        results=out.results[0].active_ingredients[0].name;
        document.getElementById("ingredient").innerHTML = results;
        results=out.results[0].dosage_form;
        document.getElementById("form").innerHTML = results;

    })
    .catch(err => { throw err });
}
