#extension GL_OES_standard_derivatives : enable

varying vec3 k;
varying vec3 normal;

void main(void) {
    vec3 f  = fract (k * 100.0);
    vec3 df = fwidth(k * 100.0);

    vec3 g = smoothstep(0.05, 0.10, f);

    float c = g.x * g.y * g.z;

    gl_FragColor = vec4(c, c, c, 1.0);
}