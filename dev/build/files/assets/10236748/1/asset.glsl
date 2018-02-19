attribute vec4 aPosition;
attribute vec3 aNormal;

uniform mat4 matrix_viewProjection;
uniform mat4 matrix_model;

varying vec3 k;
varying vec3 normal;

void main(void) {
    k = (matrix_model * aPosition).xyz;
    normal = aNormal;
    gl_Position = matrix_viewProjection * matrix_model * vec4(aPosition.xyz, 1.0);
}