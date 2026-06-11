export function formatFloat(imaskString){
    if(!imaskString){ return 0.0; }

    let cleaned = imaskString.replace(/[^\d.,]/g,'');
    cleaned.replace(',' , '.');
    const result = parseFloat(cleaned);

    if(isNaN(result)){
        return 0.0;
    } else {
        return result;
    }
}

export function formatInt(imaskString){
    if(!imaskString){ return 0.0; }

    return parseInt(imaskString);
}
