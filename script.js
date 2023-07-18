function addInputField() {
    var container = document.getElementById("inputContainer");
    var inputDiv = document.createElement("div");

    var ownerNameInput = document.createElement("input");
    ownerNameInput.type = "text";
    ownerNameInput.name = "ownerName[]";
    ownerNameInput.placeholder = "Owner's Name";

    var ownerAgeInput = document.createElement("input");
    ownerAgeInput.type = "number";
    ownerAgeInput.name = "ownerAge[]";
    ownerAgeInput.placeholder = "Owner's Age";

    inputDiv.appendChild(ownerNameInput);
    inputDiv.appendChild(ownerAgeInput);
    container.appendChild(inputDiv);
}

function removeInputField() {
    var container = document.getElementById("inputContainer");
    var inputDivs = container.getElementsByTagName("div");
    if (inputDivs.length > 1) {
        container.removeChild(inputDivs[inputDivs.length - 1]);
    }
}