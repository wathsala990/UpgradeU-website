 //Creating  adatabase /using an existing db
 use('shop');
 //Create a collection 
 db.createCollection('category');
 //Creating a document
 use('shop');
 db.getCollection('category').insertOne(
    {
        id:'CAT-001',
        name:'Stationaries'
    }
);