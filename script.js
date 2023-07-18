function addOwner() {
    const container = document.getElementById("inputContainer");
    const inputDiv = document.createElement("div");

    const ownerNameInput = document.createElement("input");
    ownerNameInput.type = "text";
    ownerNameInput.name = "ownerName[]";
    ownerNameInput.placeholder = "Owner's Name";

    const ownerAgeInput = document.createElement("input");
    ownerAgeInput.type = "number";
    ownerAgeInput.name = "ownerAge[]";
    ownerAgeInput.placeholder = "Owner's Age";

    inputDiv.appendChild(ownerNameInput);
    inputDiv.appendChild(ownerAgeInput);
    container.appendChild(inputDiv);
}

function removeOwner() {
    const container = document.getElementById("inputContainer");
    const inputDivs = container.getElementsByTagName("div");
    if (inputDivs.length > 1) {
        container.removeChild(inputDivs[inputDivs.length - 1]);
    }
}