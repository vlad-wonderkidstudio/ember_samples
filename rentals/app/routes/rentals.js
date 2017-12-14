import Route from '@ember/routing/route';

export default Route.extend({

  model() {
    let ret = this.get('store').findAll('rental');
    console.log(ret);
    return ret;
  }
 
});
