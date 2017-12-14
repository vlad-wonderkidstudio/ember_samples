import DS from 'ember-data';

export default DS.JSONAPIAdapter.extend({
//export default DS.RESTAdapter.extend({
//export default DS.JSONSerializer.extend({
  //defaultSerializer: 'JSONSerializer',
  namespace: 'admin_panel/ember_samples/rentals_yii/yii2-advanced-api/api/web',
  host: 'http://ember.loc'
});
